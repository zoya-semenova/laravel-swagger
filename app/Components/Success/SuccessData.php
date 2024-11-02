<?php

namespace App\Components\Success;

use OpenApi\Attributes as OA;
use phpDocumentor\Reflection\Types\Boolean;

#[OA\Schema()]
class SuccessData
{
    public function __construct(
        #[OA\Property(property: 'status')]
        public readonly ?string $status = null,
        #[OA\Property(property: 'data',
            properties: [
                new OA\Property(
                    property: 'messages',
                    type:'array',
                    items: new OA\Items()
                )
            ],
            type: 'object'
        )]
        public readonly ?object $data = null,
    ) {}
}
