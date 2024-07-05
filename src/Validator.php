<?php

declare(strict_types=1);

namespace Phico\Validation;

use Somnambulist\Components\Validation\{Factory, Validation};


class Validator
{
    private Factory $factory;
    private Validation $validator;


    public function __construct()
    {
        $this->factory = new Factory;
    }
    public function make(array $data, array $rules): Validation
    {
        return $this->factory->make($data, $rules);
    }
    public function check(array $data, array $rules): Validation
    {
        return $this->factory->validate($data, $rules);
    }
}
