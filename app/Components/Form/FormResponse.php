<?php

namespace App\Components\Form;

use OpenApi\Attributes as OA;
use phpDocumentor\Reflection\Php\Property;
use phpDocumentor\Reflection\Types\Boolean;

#[\Attribute(
    \Attribute::TARGET_PARAMETER
)]
class FormResponse extends OA\Response
{
    public function
    __construct(
        string $data = null,
    )
    {
        parent::__construct(
            response: 200,
            description: 'Возвращает конструктор формы',
            content:  new OA\JsonContent(
                properties:[
                        new OA\Property(property: 'status', type: 'string'),
                        new OA\Property(property: 'data', ref: $data
                    ),
                ]
             )
        );
    }
}
