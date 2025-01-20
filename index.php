<?php
$version = '1.1.0';

$websites = [
    'novogamer.com'    => 'https://icons.duckduckgo.com/ip3/novogamer.com.ico',
    'annoyingbeep.com' => 'https://icons.duckduckgo.com/ip3/annoyingbeep.com.ico',
    'seotoolkit.dev'   => 'https://icons.duckduckgo.com/ip3/seotoolkit.dev.ico',
    'browser.is'       => 'https://icons.duckduckgo.com/ip3/browser.is.ico',
    'downdetectordowndetector.com' => 'https://downdetectordowndetector.com/icon.png',
];
?>

<!doctype html>
<html class="no-js h-full font-inter" lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SpacemanCodes LTD</title>
    <link rel="stylesheet" href="css/app.css?v=<?= $version ?>">
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
</head>

<body class="bg-black text-white h-full bg-cover bg-center lazy-background">
<main class="grid min-h-full place-items-center px-6 py-24 sm:py-32 lg:px-8">
    <div class="text-center">
        <img src="icon.svg?v=<?= $version ?>" alt="SpacemanCodes LTD" class="w-28 lg:w-56 mx-auto mb-4">
        <h1 class="mt-4 text-3xl font-poppins font-semibold sm:text-5xl">
            SpacemanCodes LTD
        </h1>
        <ul class="flex items-center flex-wrap justify-center gap-2 mt-8">
            <?php foreach ($websites as $website => $favicon): ?>
                <li>
                    <a href="https://<?= $website ?>" target="_blank" class="text-white bg-white/10 flex items-center gap-1.5 hover:text-primary transition-colors hover:bg-black/5 px-4 py-1.5 rounded-lg">
                        <div class="w-6 aspect-square flex items-center bg-white justify-center p-1.5 rounded-full">
                            <img class="w-full" width="12" height="12" alt="Favicon for <?= $website ?>" src="<?= $favicon ?>"/>
                        </div>
                        <span class="mt-[-2px]"><?= $website ?></span>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</main>
</body>

<script src="js/app.js?v=<?= $version ?>"></script>

</html>
