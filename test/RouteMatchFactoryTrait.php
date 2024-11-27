<?php

declare(strict_types=1);

namespace LaminasTest\ApiTools\Versioning;

use Laminas\Router\RouteMatch;

trait RouteMatchFactoryTrait
{
    /**
     * Create and return a version-specific RouteMatch instance.
     *
     * @return RouteMatch
     */
    public function createRouteMatch(array $params = [])
    {
        $class = $this->getRouteMatchClass();
        return new $class($params);
    }

    /**
     * Get the version-specific RouteMatch class to use.
     *
     * @return string
     */
    public function getRouteMatchClass()
    {
        return RouteMatch::class;
    }
}
