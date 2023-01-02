<?php

namespace MadeByBob\Carbone\Requests;

use MadeByBob\Carbone\Requests\Render\DownloadRenderRequest;
use MadeByBob\Carbone\Requests\Render\RenderTemplateRequest;
use MadeByBob\Carbone\Responses\CarboneResponse;
use MadeByBob\Carbone\Responses\RenderTemplateResponse;
use Sammyjo20\Saloon\Http\RequestCollection;

class RendersCollection extends RequestCollection
{
    public function render(string $templateId, array $data): RenderTemplateResponse
    {
        return (new RenderTemplateRequest($templateId, $data))
            ->setConnector($this->connector)
            ->send();
    }

    public function download(string $renderId): CarboneResponse
    {
        return (new DownloadRenderRequest($renderId))
            ->setConnector($this->connector)
            ->send();
    }
}
