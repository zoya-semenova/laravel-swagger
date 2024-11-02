<?php

namespace App\Components\Lang;

use OpenApi\Attributes as OA;
use phpDocumentor\Reflection\Types\Boolean;

#[OA\Schema()]
class LangForm
{
    public function __construct(
        #[OA\Property(
            property: 'caption',
            ref: '#/components/schemas/FieldData',
            type: 'object',
                )]
        public readonly ?object $caption = null,
        #[OA\Property(
            property: 'locale',
            ref: '#/components/schemas/FieldData',
            type: 'object',
        )]
        public readonly ?object $locale = null,
        #[OA\Property(
            property: 'active',
            ref: '#/components/schemas/FieldData',
            type: 'object',
        )]
        public readonly ?object $active = null,
    ) {}
}
