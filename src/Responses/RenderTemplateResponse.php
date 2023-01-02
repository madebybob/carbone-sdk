<?php

namespace MadeByBob\Carbone\Responses;

class RenderTemplateResponse extends CarboneResponse
{
    public function getRenderId(): ?string
    {
        return $this->json('data.renderId');
    }
}
