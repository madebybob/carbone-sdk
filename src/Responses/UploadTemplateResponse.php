<?php

namespace MadeByBob\Carbone\Responses;

class UploadTemplateResponse extends CarboneResponse
{
    public function getTemplateId(): ?string
    {
        return $this->json('data.templateId');
    }
}
