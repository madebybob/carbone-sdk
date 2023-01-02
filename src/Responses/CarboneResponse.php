<?php

namespace MadeByBob\Carbone\Responses;

use Sammyjo20\Saloon\Http\SaloonResponse;
use MadeByBob\Carbone\Exceptions\CarboneRequestException;

class CarboneResponse extends SaloonResponse
{
    /**
     * Create an exception if a server or client error occurred.
     *
     * @return CarboneRequestException
     */
    public function toException(): CarboneRequestException
    {
        if ($this->failed()) {
            $body = $this->response?->getBody()?->getContents();

            return new CarboneRequestException($this, $body, 0, $this->getGuzzleException());
        }
    }
}
