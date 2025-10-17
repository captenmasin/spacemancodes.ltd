<?php

if (!function_exists('vite_server_origin')) {
    function vite_server_origin(): string
    {
        $host = 'http://127.0.0.1';
        $port = 5173;

        return sprintf('%s:%d', $host, $port);
    }
}

if (!function_exists('vite_is_dev_server_running')) {
    function vite_is_dev_server_running(): bool
    {
        static $isRunning;

        if ($isRunning !== null) {
            return $isRunning;
        }

        $host = '127.0.0.1';
        $port = 5173;

        $connection = @fsockopen($host, $port, $errno, $errstr, 0.1);

        if (is_resource($connection)) {
            fclose($connection);
            $isRunning = true;
        } else {
            $isRunning = false;
        }

        return $isRunning;
    }
}

if (!function_exists('vite_manifest')) {
    /**
     * @throws RuntimeException if the manifest file is missing or malformed.
     */
    function vite_manifest(): array
    {
        static $manifest;

        if ($manifest !== null) {
            return $manifest;
        }

        $manifestPath = __DIR__ . '/dist/.vite/manifest.json';

        if (!file_exists($manifestPath)) {
            throw new RuntimeException('Vite manifest not found. Run `npm run build` to generate it.');
        }

        $contents = file_get_contents($manifestPath);
        $decoded = json_decode($contents, true);

        if (!is_array($decoded)) {
            throw new RuntimeException('Invalid Vite manifest. Delete dist/ and rebuild the assets.');
        }

        $manifest = $decoded;

        return $manifest;
    }
}

if (!function_exists('vite_asset')) {
    /**
     * @throws InvalidArgumentException if an entry could not be found in the manifest.
     */
    function vite_asset(string $entry): string
    {
        if (vite_is_dev_server_running()) {
            return rtrim(vite_server_origin(), '/') . '/' . ltrim($entry, '/');
        }

        $manifest = vite_manifest();

        if (!array_key_exists($entry, $manifest) || !isset($manifest[$entry]['file'])) {
            throw new InvalidArgumentException("Unable to locate Vite asset for entry [{$entry}].");
        }

        return '/dist/' . $manifest[$entry]['file'];
    }
}

if (!function_exists('vite_css')) {
    function vite_css(string $entry): array
    {
        if (vite_is_dev_server_running()) {
            return [];
        }

        $manifest = vite_manifest();

        if (!array_key_exists($entry, $manifest) || empty($manifest[$entry]['css'])) {
            return [];
        }

        return array_map(
            static fn (string $path): string => '/dist/' . ltrim($path, '/'),
            $manifest[$entry]['css']
        );
    }
}

if (!function_exists('vite_client')) {
    function vite_client(): ?string
    {
        if (!vite_is_dev_server_running()) {
            return null;
        }

        return rtrim(vite_server_origin(), '/') . '/@vite/client';
    }
}
