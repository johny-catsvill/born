<?php

if (!function_exists('storage_url')) {
    function storage_url($path)
    {
        return Storage::disk(config('admin.storage.disk'))->url($path);
    }
}
