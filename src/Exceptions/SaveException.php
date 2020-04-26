<?php

declare(strict_types=1);

namespace spaceonfire\DataSource\Exceptions;

class SaveException extends DomainException
{
    /**
     * @inheritDoc
     */
    protected function getDefaultMessage(array $parameters = []): string
    {
        return 'Save Exception';
    }
}
