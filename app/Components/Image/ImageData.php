<?php

namespace App\Components\Image;

use OpenApi\Attributes as OA;
use phpDocumentor\Reflection\Types\Boolean;

#[OA\Schema()]
class ImageData
{
    public function __construct(
        #[OA\Property(property: 'id')]
        public readonly ?int $id = null,
        #[OA\Property(property: 'name')]
        public readonly ?string $name = null,
        #[OA\Property(property: 'hash')]
        public readonly ?string $hash = null,
        #[OA\Property(property: 'ext')]
        public readonly ?string $ext = null,
        #[OA\Property(property: 'size')]
        public readonly ?string $size = null,
        #[OA\Property(property: 'type')]
        public readonly ?string $type = null,
        #[OA\Property(property: 'file_url')]
        public readonly ?string $file_url = null,
    ) {}
}
