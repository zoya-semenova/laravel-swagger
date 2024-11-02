<?php

namespace App\Components\Lang;

use OpenApi\Attributes as OA;
use phpDocumentor\Reflection\Types\Boolean;

#[OA\Schema()]
class LangRequest
{
    public function __construct(
        #[OA\Property(property: 'caption')]
        public readonly ?string $caption = null,
        #[OA\Property(property: 'locale')]
        public readonly ?string $locale = null,
        #[OA\Property(property: 'active')]
        public readonly ?bool $active = null,
        #[OA\Property(
            property: 'images',
            type:'array',
            items: new OA\Items(ref:'#/components/schemas/ImageRequest')
        )]
        public readonly ?array $images = null,
    ) {}
}
