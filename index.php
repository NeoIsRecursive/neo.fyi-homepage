<?php

require __DIR__ . '/vendor/autoload.php';

$stuff = scandir(__DIR__);

$folders = array_filter($stuff, ['App\Helper\Link', 'getProject']);

$folders = array_map(['App\Helper\Link', 'getPathAndName'], $folders);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/app.css">
    <title>NEO.FYI</title>
</head>

<body class="bg-cyan-300 grid grid-cols-1 gap-3 place-items-center w-full md:w-auto font-mono">

    <h1 class="text-2xl mt-3">Welcome to neo.fyi</h1>
    <h2>My hosted projects:</h2>
    <div class="grid grid-cols-1 gap-2 w-full md:w-auto">
        <?php foreach ($folders as $site) : ?>
            <a href="<?= 'https://' . $site['path'] . '.neo.fyi' ?>" class="p-4 bg-slate-50 mx-2 hover:bg-blue-300 md:mx-0 text-center">
                <div>
                    <p class="text-xl"><?= $site['name'] ?></p>
                </div>
            </a>
        <?php endforeach; ?>
    </div>
    <p>you can see more projects <a href="https://github.com/neoisrecursive" class="text-red-500 hover:text-blue-500">on my github</a></p>
</body>

</html>