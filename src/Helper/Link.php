<?php

declare(strict_types=1);

namespace App\Helper;

/** @package App\Helper */
class Link
{

    public static function getProject(string $x): bool
    {
        if (!str_contains($x, '.') && is_dir($x)) {
            return true;
        }
        return false;
    }

    public static function getPathAndName(string $folder): array
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
}
