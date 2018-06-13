<?php

declare(strict_types=1);

namespace Keboola\VerifyEncrypt;

use Keboola\Component\Config\BaseConfig;

class Config extends BaseConfig
{
    public function getPlain() : string
    {
        return $this->getValue(['parameters', 'plain']);
    }

    public function getEncrypted() : string
    {
        return $this->getValue(['parameters', '#encrypted']);
    }
}
