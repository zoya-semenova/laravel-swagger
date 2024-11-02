<?php

namespace App\Components\Error;

use OpenApi\Attributes as OA;
use phpDocumentor\Reflection\Types\Boolean;

#[OA\Schema()]
class ErrorData
{
    public function __construct(
        #[OA\Property(property: 'status')]
        public readonly ?string $status = null,
        #[OA\Property(property: 'errors', items:new OA\Items())]
        public readonly ?array $errors = null,
    ) {}
}
