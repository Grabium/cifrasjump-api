<?php

namespace App\Services\Acorde;

interface AcordeComposicaoInterface
{
    public function __construct(mixed $key = 'NaoTestado');

    public function validate(mixed $key);
}
