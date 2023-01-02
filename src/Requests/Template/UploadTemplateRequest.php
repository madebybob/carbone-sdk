<?php

namespace MadeByBob\Carbone\Requests\Template;

use Sammyjo20\Saloon\Constants\Saloon;
use MadeByBob\Carbone\Requests\Request;
use Sammyjo20\Saloon\Clients\MockClient;
use Sammyjo20\Saloon\Traits\Plugins\HasJsonBody;
use MadeByBob\Carbone\Responses\UploadTemplateResponse;

/**
 * @method UploadTemplateResponse send(MockClient $mockClient = null, bool $asynchronous = false)
 */
class UploadTemplateRequest extends Request
{
    use HasJsonBody;

    protected ?string $method = Saloon::POST;

    protected ?string $response = UploadTemplateResponse::class;

    public function __construct(
        private string $content
    ) {
    }

    public function defineEndpoint(): string
    {
        return '/template';
    }

    public function defaultData(): array
    {
        return [
            'template' => $this->content,
        ];
    }
}
