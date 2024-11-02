<?php

namespace App\Components\Image;

use OpenApi\Attributes as OA;
use phpDocumentor\Reflection\Types\Boolean;

#[OA\Schema()]
class ImageRequest
{
    public function __construct(
        #[OA\Property(property: 'id')]
        public readonly ?int $id = null,
        #[OA\Property(property: 'name')]
        public readonly ?string $name = null,
        #[OA\Property(property: 'hash')]
        public readonly ?string $hash = null,
        #[OA\Property(property: 'sort_index')]
        public readonly ?int $sort_index = null,
    ) {}
}
