<?php

namespace MadeByBob\Carbone\Tests\Integration;

use MadeByBob\Carbone\Carbone;

class TestCase extends \PHPUnit\Framework\TestCase
{

    protected Carbone $carbone;

    protected function setUp(): void
    {
        parent::setUp();

        $this->carbone = new Carbone(getCarboneToken());
    }

    protected function getTemplateContent(): string
    {
        return base64_encode(file_get_contents(__DIR__ . '/../stubs/template.docx'));
    }
}
