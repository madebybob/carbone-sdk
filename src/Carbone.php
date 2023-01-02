<?php

namespace MadeByBob\Carbone;

use Sammyjo20\Saloon\Http\SaloonConnector;
use MadeByBob\Carbone\Responses\CarboneResponse;
use Sammyjo20\Saloon\Traits\Plugins\AcceptsJson;
use MadeByBob\Carbone\Requests\RendersCollection;
use Sammyjo20\Saloon\Http\Auth\TokenAuthenticator;
use MadeByBob\Carbone\Requests\TemplatesCollection;
use Sammyjo20\Saloon\Interfaces\AuthenticatorInterface;

/**
 * @method TemplatesCollection templates
 * @method RendersCollection renders
 */
class Carbone extends SaloonConnector
{
    use AcceptsJson;

    protected ?string $response = CarboneResponse::class;

    protected array $requests = [
        'templates' => TemplatesCollection::class,
        'renders' => RendersCollection::class,
    ];

    public function defineBaseUrl(): string
    {
        return 'https://api.carbone.io/';
    }

    public function __construct(
        private string $token
    ) {
    }

    public function defaultAuth(): ?AuthenticatorInterface
    {
        return new TokenAuthenticator($this->token);
    }

    public function defaultHeaders(): array
    {
        return [
            'carbone-version' => '4',
            'Content-Type' => 'application/json',
        ];
    }

    public function defaultConfig(): array
    {
        return [];
    }

    public function getToken(): string
    {
        return $this->token;
    }
}
