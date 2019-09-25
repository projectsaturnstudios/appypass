<?php
/**
 * If there's no specific filesystem defined for us, let's just copy the default one and change
 * the root.
 */
$config = config('filesystems');

// Check whether there is a specific filesystem defined for appypass
// or we should use the default one.
if (isset($config['disks']['appypass'])) {
    $appypass_fs = 'appypass';
} else {
    $appypass_fs = $config['default'];
}

if (isset($config['disks'][$appypass_fs])) {
    $config['disks']['appypass'] = $config['disks'][$appypass_fs];
    $config['disks']['appypass']['root'] = storage_path('app/appypass');
} else {
    throw new Exception('There must be a default filesystem defined.');
}

return $config;
