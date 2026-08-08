<?php

declare(strict_types=1);

namespace LaminasTest\ApiTools\Versioning\TestAsset;

use Laminas\EventManager\EventManagerInterface;
use Laminas\Mvc\ApplicationInterface;
use Laminas\ServiceManager\ServiceLocatorInterface;
use Laminas\Stdlib\RequestInterface;
use Laminas\Stdlib\ResponseInterface;
use Override;

/** @psalm-suppress MissingConstructor */
class Application implements ApplicationInterface
{
    /** @var EventManagerInterface */
    protected $events;

    /** @var ServiceLocatorInterface */
    protected $services;

    public function setServiceManager(ServiceLocatorInterface $services): void
    {
        $this->services = $services;
    }

    public function setEventManager(EventManagerInterface $events): void
    {
        $this->events = $events;
    }

    /** @return ServiceLocatorInterface */
    #[Override]
    public function getServiceManager()
    {
        return $this->services;
    }

    /** @return EventManagerInterface */
    #[Override]
    public function getEventManager()
    {
        return $this->events;
    }

    // Unimplemented methods
    // phpcs:disable Squiz.Commenting.FunctionComment.InvalidNoReturn

    /**
     * Get the request object
     *
     * @return RequestInterface
     */
    #[Override]
    public function getRequest()
    {
    }

    /**
     * Get the response object
     *
     * @return ResponseInterface
     */
    #[Override]
    public function getResponse()
    {
    }

    /**
     * Run the application
     *
     * @return self
     */
    #[Override]
    public function run()
    {
    }

    // phpcs:enable Squiz Commenting.FunctionComment.InvalidNoReturn
}
