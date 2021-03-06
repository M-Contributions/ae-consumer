<?php
declare(strict_types=1);

/**
 * Application Class
 * @author Max Demian <ticaje@filetea.me>
 */

namespace Ticaje\AliexpressConsumer\Application\UseCase\Handler;

use Ticaje\AeSdk\Api\Interfaces\Post\ProductPostInterface as ProductPostMediator;

use Ticaje\AliexpressConsumer\Application\Interfaces\PostPutProductHandlerInterface;
use Ticaje\AliexpressConsumer\Domain\Interfaces\Entity\RequestValidatorInterface;

/**
 * Class PostProductHandler
 * @package Ticaje\AliexpressConsumer\Application\UseCase\Handler
 */
class PostProductHandler implements PostPutProductHandlerInterface
{
    use HandlerTrait;

    private $mediator;

    private $requestValidator;

    private $verb;

    /**
     * PostProductHandler constructor.
     * @param ProductPostMediator $mediator
     * @param RequestValidatorInterface $requestValidator
     * @param string $verb
     */
    public function __construct(
        ProductPostMediator $mediator,
        RequestValidatorInterface $requestValidator,
        string $verb
    ) {
        $this->mediator = $mediator;
        $this->requestValidator = $requestValidator;
        $this->verb = $verb;
    }
}
