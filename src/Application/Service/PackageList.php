<?php
namespace Application\Service;

class PackageList
{
    public function __invoke()
    {
        return [
            'success' => true,
            'packages' => [
                'AtlasOrm.DebugBar.Bridge' => [
                    'url' => 'https://github.com/cadrephp/AtlasOrm.DebugBar.Bridge',
                    'desc' => 'Library to use PHP DebugBar with Atlas ORM',
                    'packagist' => true,
                    'package' => 'atlasorm-debugbar-bridge',
                ],
                'Cadre.CliAdr' => [
                    'url' => 'https://github.com/cadrephp/Cadre.CliAdr',
                    'desc' => 'Command line ADR implementation',
                    'packagist' => true,
                    'package' => 'cadre/cliadr',
                ],
                'Cadre.Module' => [
                    'url' => 'https://github.com/cadrephp/Cadre.Module',
                    'desc' => 'Module system based on Aura.Di',
                    'packagist' => true,
                    'package' => 'cadre/module',
                ],
                'Cadre.Package' => [
                    'url' => 'https://github.com/cadrephp/Cadre.Package',
                    'desc' => 'This is a package skeleton for me to use when starting new Cadre packages',
                    'packagist' => false,
                    'package' => 'cadre/package',
                ],
                'Cadre.Project' => [
                    'url' => 'https://github.com/cadrephp/Cadre.Project',
                    'desc' => 'This is a project skeleton for me to use when starting new projects',
                    'packagist' => false,
                    'package' => 'cadre/project',
                ],
                'Cadre.Domain_Session' => [
                    'url' => 'https://github.com/cadrephp/Cadre.Domain_Session',
                    'desc' => 'Library for managing session data within the domain',
                    'packagist' => false,
                    'package' => 'cadre/domain-session',
                ],
            ],
        ];
    }
}
