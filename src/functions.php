<?php

declare(strict_types=1);

function getProjects($x)
{
    if (!str_contains($x, '.') && is_dir($x)) {
        return true;
    }
    return false;
}

function getPathAndName($folder)
{
    $info = ['path' => $folder];
    if (str_contains($folder, '-')) {
        $folder = explode('-', $folder);
        $folder = implode(' ', $folder);
        $info['name'] = $folder;
    } else {
        $info['name'] = $folder;
    }
    return $info;
}
