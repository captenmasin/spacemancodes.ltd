<?php
$version = '1.1.0';

$websites = [
    'novogamer.com'    => 'https://icons.duckduckgo.com/ip3/novogamer.com.ico',
    'annoyingbeep.com' => 'https://icons.duckduckgo.com/ip3/annoyingbeep.com.ico',
    'seotoolkit.dev'   => 'https://icons.duckduckgo.com/ip3/seotoolkit.dev.ico',
    'browser.is'       => 'https://icons.duckduckgo.com/ip3/browser.is.ico',
    'bookbound.app'    => 'https://bookbound.app/favicon.ico',
];

require_once __DIR__ . '/vite.php';

$websitesJson = htmlspecialchars(
    json_encode($websites, JSON_UNESCAPED_SLASHES) ?: '{}',
    ENT_QUOTES,
    'UTF-8'
);
?>

<!doctype html>
<html class="no-js h-full font-inter" lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SpacemanCodes LTD</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:300,400,500,600|poppins:600,600i,700,700i" rel="stylesheet"/>

    <meta name="description" content="SpacemanCodes LTD">

    <meta property="og:title" content="SpacemanCodes LTD">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://spacemancodes.ltd">
    <meta property="og:image" content="https://spacemancodes.ltd/img/og.png">

    <link rel="icon" href="/favicon.ico?v=<?= $version ?>" sizes="any">
    <link rel="icon" href="/icon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="icon.png">

    <link rel="manifest" href="site.webmanifest">
    <meta name="theme-color" content="#000000">
    <?php foreach (vite_css('src/main.js') as $css): ?>
        <link rel="stylesheet" href="<?= $css ?>">
    <?php endforeach; ?>
</head>

<body class="bg-black text-white h-full bg-cover bg-center lazy-background">
<div
    id="app"
    data-version="<?= htmlspecialchars($version, ENT_QUOTES, 'UTF-8') ?>"
    data-websites='<?= $websitesJson ?>'
></div>
<?php if ($client = vite_client()): ?>
    <script type="module" src="<?= $client ?>"></script>
<?php endif; ?>
<script type="module" src="<?= vite_asset('src/main.js') ?>"></script>

</body>

</html>
