<?php

declare(strict_types=1);

namespace Phico\Validation;

use Phico\PhicoException;
use Somnambulist\Components\Validation\Validation;


class ValidationException extends PhicoException
{
    protected Validation $validator;

    public function __construct(string $message, Validation $validator)
    {
        parent::__construct($message, 422);
        $this->validator = $validator;
    }
    public function getInput()
    {
        return $this->validator->input();
    }
    public function getErrors()
    {
        return $this->validator->errors();
    }
    public function getFailed()
    {
        return $this->validator->getInvalidData();
    }
    public function getPassed()
    {
        return $this->validator->getValidData();
    }
    public function toArray(): array
    {
        return [
            'code' => $this->getCode(),
            'message' => $this->getMessage(),
            'errors' => $this->getErrors(),
            'input' => $this->getInput(),
            'passed' => $this->getPassed(),
            'failed' => $this->getFailed(),
        ];
    }
}
