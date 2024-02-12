<?php

namespace AlNutile\DocusignDriver\Response;

use Spatie\LaravelData\Data;

class FieldsDto extends Data
{
    public function __construct(
        public ?string $name,
        public string $type,
        public ?bool $required,

    ) {

    }
}
