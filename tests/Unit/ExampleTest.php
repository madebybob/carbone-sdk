<?php

use MadeByBob\Carbone\Carbone;

it('can make an instance', function () {

    $carbone = (new Carbone(getCarboneToken()));

    expect($carbone)->toBeInstanceOf(Carbone::class);
});
