<?php

namespace MadeByBob\Carbone\Tests\Integration;

use MadeByBob\Carbone\Responses\UploadTemplateResponse;

class UploadTemplateTest extends TestCase
{
    public function test_can_upload_template(): void
    {
        $response = $this->carbone
            ->templates()
            ->upload($this->getTemplateContent());

        $this->assertInstanceOf(
            UploadTemplateResponse::class,
            $response
        );

        $this->assertEquals(
            200,
            $response->status()
        );

        $this->assertEquals(
            [
                'success' => true,
                'data' => [
                    'templateId' => '7abf2e5f5ec044f6bd64b38f0774cda6e61aefede21db1148db43d439ee76e01',
                ],
            ],
            $response->json()
        );

        $this->assertEquals(
            '7abf2e5f5ec044f6bd64b38f0774cda6e61aefede21db1148db43d439ee76e01',
            $response->getTemplateId()
        );
    }

}
