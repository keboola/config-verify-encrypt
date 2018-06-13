<?php

declare(strict_types=1);

namespace Keboola\VerifyEncrypt\Tests;

use Keboola\VerifyEncrypt\Config;
use Keboola\VerifyEncrypt\ConfigDefinition;
use PHPUnit\Framework\TestCase;

class ConfigTest extends TestCase
{
    public function testCustomGetters(): void
    {
        $configArray = [
            'parameters' => [
                'plain' => 'value1',
                '#encrypted' => 'value2',
            ],
        ];
        $config = new Config($configArray, new ConfigDefinition());

        $this->assertSame('value1', $config->getPlain());
        $this->assertSame('value2', $config->getEncrypted());
    }
}
