<?php

namespace App\Components\Item;

use OpenApi\Attributes as OA;
use phpDocumentor\Reflection\Php\Property;
use phpDocumentor\Reflection\Types\Boolean;

#[\Attribute(
    \Attribute::TARGET_PARAMETER
)]
class ItemResponse extends OA\Response
{
    public function
    __construct(
        string $data = null,
    )
    {
        parent::__construct(
            response: 200,
            description: 'Возвращает язык',
            content:  new OA\JsonContent(
                properties:[
                    new OA\Property(property: 'status', type: 'string'),
                    new OA\Property(property: 'data', ref: $data),
                ]
             )
        );
    }
}
