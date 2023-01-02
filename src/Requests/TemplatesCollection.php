<?php

namespace MadeByBob\Carbone\Requests;

use MadeByBob\Carbone\Requests\Template\DeleteTemplateRequest;
use MadeByBob\Carbone\Requests\Template\UploadTemplateRequest;
use MadeByBob\Carbone\Responses\CarboneResponse;
use MadeByBob\Carbone\Responses\UploadTemplateResponse;
use Sammyjo20\Saloon\Http\RequestCollection;

class TemplatesCollection extends RequestCollection
{
    public function upload(string $content): UploadTemplateResponse
    {
        return (new UploadTemplateRequest($content))
            ->setConnector($this->connector)
            ->send();
    }

    public function delete(string $templateId): CarboneResponse
    {
        return (new DeleteTemplateRequest($templateId))
            ->setConnector($this->connector)
            ->send();
    }
}
