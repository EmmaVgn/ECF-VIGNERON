<?php

namespace ContainerHzejJAA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTypeRepositoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Repository\TypeRepository' shared autowired service.
     *
     * @return \App\Repository\TypeRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Repository/TypeRepository.php';

        return $container->privates['App\\Repository\\TypeRepository'] = new \App\Repository\TypeRepository(($container->services['doctrine'] ?? self::getDoctrineService($container)));
    }
}
