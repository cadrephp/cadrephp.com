<?php
namespace Application\Module;

use Application\Service\PackageList;
use Aura\Di\Container;
use Cadre\Module\Module;

class Routing extends Module
{
    public function define(Container $di)
    {
    }

    public function modify(Container $di)
    {
        $adr = $di->get('radar/adr:adr');

        $adr->get('Home', '/', PackageList::class)
            ->defaults(['_view' => 'home.html.twig']);
    }
}
