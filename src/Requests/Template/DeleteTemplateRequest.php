<?php

namespace MadeByBob\Carbone\Requests\Template;

use Sammyjo20\Saloon\Constants\Saloon;
use MadeByBob\Carbone\Requests\Request;
use Sammyjo20\Saloon\Traits\Plugins\HasJsonBody;

class DeleteTemplateRequest extends Request
{
    use HasJsonBody;

    protected ?string $method = Saloon::DELETE;

    public function __construct(
        private string $templateId
    ) {
    }

    public function defineEndpoint(): string
    {
        return '/template/' . $this->templateId;
    }

}
