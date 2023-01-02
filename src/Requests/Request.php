<?php

namespace MadeByBob\Carbone\Requests;

use MadeByBob\Carbone\Carbone;
use Sammyjo20\Saloon\Http\SaloonRequest;

class Request extends SaloonRequest
{
    /**
     * @var string|null
     */
    protected ?string $connector = Carbone::class;
}
