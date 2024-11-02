<?php

namespace App\Components\Pagination;

use OpenApi\Attributes as OA;
use phpDocumentor\Reflection\Types\Boolean;

#[OA\Schema()]
class PaginationData
{
    public function __construct(
        #[OA\Property(property: 'count')]
        public readonly ?int $count = null,
    ) {}
}
