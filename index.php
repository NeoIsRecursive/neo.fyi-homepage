<?php

require __DIR__ . '/vendor/autoload.php';

$itemsInDir = scandir(__DIR__);

$projects = array_filter($itemsInDir, ['App\Helper\Link', 'getProject']);

$projects = array_map(['App\Helper\Link', 'getPathAndName'], $projects);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/styles/app.css">
    <title>NEO.FYI</title>
</head>

<body class="bg-cyan-300 grid grid-cols-1 gap-3 place-items-center w-full md:w-auto font-mono">

    <h1 class="text-2xl mt-3">Welcome to neo.fyi</h1>
    <h2>My hosted projects:</h2>
    <?php require __DIR__ . '/public/views/project-list.php' ?>
    <p>you can see more projects <a href="https://github.com/neoisrecursive" class="text-red-500 hover:text-blue-500">on my github</a></p>
    <footer class="fixed bottom-0 left-0 text-center w-full">
        <p> &copy; Neo Lejondahl 2022;</p>
        <p>Made with PHP, Composer & Tailwindcss;</p>
    </footer>
</body>

</html>