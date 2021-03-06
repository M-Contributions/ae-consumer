<?php
declare(strict_types=1);

/**
 * Domain Entity Interface
 * @author Max Demian <ticaje@filetea.me>
 */

namespace Ticaje\AliexpressConsumer\Domain\Interfaces\Entity;

use Ticaje\Contract\Patterns\Interfaces\Decorator\DecoratorInterface;

use Ticaje\AeSdk\Infrastructure\Interfaces\Provider\Request\RequestDtoInterface;

/**
 * Interface RequestValidatorInterface
 * @package Ticaje\AliexpressConsumer\Domain\Interfaces\Entity
 */
interface RequestValidatorInterface
{
    /**
     * @param RequestDtoInterface $request
     * @return DecoratorInterface
     * By domain imperative, this method returns a json string that it's gonna be the data sent to AE Sdk.
     */
    public function validate(RequestDtoInterface $request): DecoratorInterface;
}
