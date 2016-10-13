<?php
namespace Portal\Bundle\PublicBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;

class Builder implements ContainerAwareInterface
{
	use ContainerAwareTrait;

    public function mainMenu(FactoryInterface $factory, array $options)
    {    	
        $menu = $factory->createItem('root');
        $menu->addChild('home', array('route' => 'homepage'));

        $menu->addChild('tools')->setAttribute('dropdown',true);
            $menu['tools']->addChild('name_generator', array('route' => 'tools_namegenerator_homepage'));
            // $menu['Tools']->addChild('Notes', array('route' => 'note'));
        return $menu;
    }
}