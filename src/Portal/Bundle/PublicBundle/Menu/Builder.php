<?php
namespace Portal\Bundle\PublicBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class Builder extends ContainerAware
{
    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');
        $menu->addChild('Home', array('route' => 'homepage'));

        // $menu->addChild('Tools')->setAttribute('dropdown',true);
        //     $menu['Tools']->addChild('Name generator', array('route' => 'tools_namegenerator_homepage'));
        //     $menu['Tools']->addChild('Notes', array('route' => 'note'));
        return $menu;
    }
}