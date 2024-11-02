<?php

namespace App\Components\Sample\Data;

use OpenApi\Attributes as OA;

#[OA\Schema()]
class SampleData
{
    public function __construct(
        #[OA\Property(property: 'id')]
        public readonly ?int $id = null,
        #[OA\Property(property: 'parent_id')]
        public readonly ?int $parentId = null,
        #[OA\Property(property: 'name')]
        public readonly ?string $name = null,
        #[OA\Property(property: 'type')]
        public readonly ?string $type = null,
        #[OA\Property(property: 'options')]
        public readonly ?string $options = null,
        #[OA\Property(property: 'sort_index')]
        public readonly ?int $sortIndex = null,
    ) {}
}
