<?php

namespace MadeByBob\Carbone\Tests\Integration;

use MadeByBob\Carbone\Exceptions\CarboneRequestException;

class DeleteTemplateTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->template = $this->carbone
            ->templates()
            ->upload($this->getTemplateContent())
            ->getTemplateId();
    }

    public function test_can_delete_template()
    {
        $response = $this->carbone
            ->templates()
            ->delete($this->template);

        $this->assertEquals(
            200,
            $response->status()
        );

        $this->assertEquals(
            [
                'success' => true,
                'message' => 'Template deleted',
            ],
            $response->json()
        );
    }

    public function test_can_not_delete_invalid_template()
    {
        $this->expectException(CarboneRequestException::class);

        $response = $this->carbone
            ->templates()
            ->delete('invalid-template-id');

        $this->assertEquals(
            400,
            $response->status()
        );

        $this->assertEquals(
            [
                'success' => false,
                'error' => 'Cannot remove template, does it exist?',
                'code' => 'w105',
            ],
            $response->json()
        );

        $this->assertTrue(
            $response->failed()
        );

        $response->throw();
    }
}
