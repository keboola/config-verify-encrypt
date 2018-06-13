<?php

declare(strict_types=1);

namespace Keboola\VerifyEncrypt;

use Keboola\Component\BaseComponent;
use Keboola\Component\UserException;

class Component extends BaseComponent
{
    public function run(): void
    {
        /** @var Config $config */
        $config = $this->getConfig();
        if ($config->getPlain() !== $config->getEncrypted()) {
            throw new UserException("Values do not match: '{$config->getPlain()}' and '{$config->getEncrypted()}'");
        }
    }

    protected function getConfigClass(): string
    {
        return Config::class;
    }

    protected function getConfigDefinitionClass(): string
    {
        return ConfigDefinition::class;
    }
}
