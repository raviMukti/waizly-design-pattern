<?php

namespace App\Dto;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Symfony\Component\HttpFoundation\Exception\BadRequestException;
use Symfony\Component\HttpKernel\Exception\UnprocessableEntityHttpException;

abstract class DtoAbstract
{
    /**
     * AbstractRequestDto constructor.
     * @param array $data
     */
    public function __construct(array $data)
    {
        if (!$this->map($data))
        {
            throw new UnprocessableEntityHttpException();
        }

        $validator = Validator::make(
            $data,
            $this->configureValidatorRules(),
            $this->configureValidatorMessages()
        );

        try
        {
            $validator->validate();
        }
        catch (ValidationException $exception)
        {
            throw new BadRequestException($validator->errors()->first());
        }

    }

    /* @return array */
    abstract protected function configureValidatorRules(): array;

    /* @return array */
    abstract protected function configureValidatorMessages(): array;

    /**
     * @param array $data
     * @return bool
     */
    abstract protected function map(array $data): bool;
}

