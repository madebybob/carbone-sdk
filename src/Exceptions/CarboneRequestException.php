<?php

namespace MadeByBob\Carbone\Exceptions;

use Sammyjo20\Saloon\Http\SaloonResponse;
use Sammyjo20\Saloon\Exceptions\SaloonRequestException;

class CarboneRequestException extends SaloonRequestException
{
    /**
     * Retrieve the response.
     *
     * @return SaloonResponse
     */
    public function getResponse(): SaloonResponse
    {
        return $this->getSaloonResponse();
    }
}
