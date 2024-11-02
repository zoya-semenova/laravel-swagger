<?php

namespace App\Components\Lang\Data;

use OpenApi\Attributes as OA;
use phpDocumentor\Reflection\Types\Boolean;

#[OA\Schema()]
class LangData
{
    public function __construct(
        #[OA\Property(property: 'id')]
        public readonly ?int $id = null,
        #[OA\Property(property: 'ministry_id')]
        public readonly ?int $ministryId = null,
        #[OA\Property(property: 'caption')]
        public readonly ?string $caption = null,
        #[OA\Property(property: 'locale')]
        public readonly ?string $locale = null,
        #[OA\Property(property: 'active')]
        public readonly ?bool $active = null,
        #[OA\Property(
            property: 'files',
            properties: [
                new OA\Property(
                    property: 'images',
                    type:'array',
                    items: new OA\Items(ref:'#/components/schemas/ImageData'))
            ],
            type: 'object'
        )]
        public readonly ?object $files = null,
    ) {}
}
