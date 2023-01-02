<?php

namespace MadeByBob\Carbone\Requests\Render;

use Sammyjo20\Saloon\Constants\Saloon;
use MadeByBob\Carbone\Requests\Request;
use Sammyjo20\Saloon\Traits\Plugins\HasJsonBody;

class DownloadRenderRequest extends Request
{
    use HasJsonBody;

    protected ?string $method = Saloon::GET;

    public function __construct(
        private string $renderId,
    ) {
    }

    public function defineEndpoint(): string
    {
        return '/render/' . $this->renderId;
    }

}
