<?php

namespace ContainerHzejJAA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCritairRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\CritairRepository' shared autowired service.
     *
     * @return \App\Repository\CritairRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Repository/CritairRepository.php';

        return $container->privates['App\\Repository\\CritairRepository'] = new \App\Repository\CritairRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
