<?php

namespace MadeByBob\Carbone\Requests\Render;

use Sammyjo20\Saloon\Constants\Saloon;
use MadeByBob\Carbone\Requests\Request;
use Sammyjo20\Saloon\Clients\MockClient;
use Sammyjo20\Saloon\Traits\Plugins\HasJsonBody;
use MadeByBob\Carbone\Responses\RenderTemplateResponse;

/**
 * @method RenderTemplateResponse send(MockClient $mockClient = null, bool $asynchronous = false)
 */
class RenderTemplateRequest extends Request
{
    use HasJsonBody;

    protected ?string $method = Saloon::POST;

    protected ?string $response = RenderTemplateResponse::class;

    public function __construct(
        private string $templateId,
        private array $data
    ) {
    }

    public function defineEndpoint(): string
    {
        return '/render/' . $this->templateId;
    }

    public function defaultData(): array
    {
        return $this->data;
    }
}
