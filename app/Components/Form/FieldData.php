<?php

namespace App\Components\Form;

use OpenApi\Attributes as OA;
use phpDocumentor\Reflection\Types\Boolean;

#[OA\Schema()]
class FieldData
{
    public function __construct(
        #[OA\Property(property: 'component')]
        public readonly ?string $component = null,
        #[OA\Property(property: 'validator')]
        public readonly ?string $validator = null,
        #[OA\Property(property: 'placeholder')]
        public readonly ?string $placeholder = null,
        #[OA\Property(property: 'value')]
        public readonly ?string $value = null,
    ) {}
}
