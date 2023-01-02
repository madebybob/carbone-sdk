<?php

namespace MadeByBob\Carbone\Requests;

use MadeByBob\Carbone\Requests\Template\UploadTemplateRequest;
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
}
