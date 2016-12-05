<?php
$phinx = include(__DIR__ . '/phinx.php');
$default = $phinx['environments']['default_database'];
$env = $phinx['environments'][$default];

if (0 === strcmp('sqlite', $env['adapter'])) {
    if (isset($env['name'])) {
        return [
            sprintf('%s:%s', $env['adapter'], $env['name']),
            null,
            null
        ];
    } elseif (isset($env['memory']) && true === $env['memory']) {
        return [
            'sqlite::memory:',
            null,
            null
        ];
    } else {
        throw new Exception('Invalid sqlite configuration');
    }
} else {
    return [
        sprintf('%s:dbname=%s;host=%s', $env['adapter'], $env['name'], $env['host']),
        $env['user'],
        $env['pass']
    ];
}
