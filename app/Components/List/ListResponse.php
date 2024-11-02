<?php

namespace App\Components\List;

use OpenApi\Attributes as OA;
use phpDocumentor\Reflection\Php\Property;
use phpDocumentor\Reflection\Types\Boolean;

#[\Attribute(
    \Attribute::TARGET_PARAMETER
)]

class ListResponse extends OA\Response
{
    public function __construct(
        string $data = null,
    )
    {
        parent::__construct(
            response: 200,
            description: 'Возвращает список языков',
            content:  new OA\JsonContent(
                properties:[
                    new OA\Property(property: 'status', type: 'string'),
                    new OA\Property(property: 'data', type: 'array', items: new OA\Items($data),),
                    new OA\Property(property: 'pagination', ref: '#/components/schemas/PaginationData')
                ]
             )
        );
    }
}
