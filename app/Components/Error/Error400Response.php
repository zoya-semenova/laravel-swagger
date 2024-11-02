<?php

namespace App\Components\Error;

use OpenApi\Attributes as OA;
use phpDocumentor\Reflection\Types\Boolean;

#[OA\Schema()]
class Error400Response extends OA\Response
{
    public function __construct(
    ) {
        parent::__construct(
            response: 400,
            description: 'Возвращает ошибку',
            content: new OA\JsonContent(
                ref: '#/components/schemas/ErrorData'
            )
        );
    }
}
