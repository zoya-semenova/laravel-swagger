<?php

namespace App\Components\Error;

use OpenApi\Attributes as OA;
use phpDocumentor\Reflection\Types\Boolean;

#[OA\Schema()]
class Error500Response extends OA\Response
{
    public function __construct(
    ) {
        parent::__construct(
            response: 500,
            description: 'Возвращает ошибку сервера',
            content: new OA\JsonContent(
                ref: '#/components/schemas/ErrorData'
            )
        );
    }
}
