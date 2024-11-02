<?php

namespace App\Components\Error;

use OpenApi\Attributes as OA;
use phpDocumentor\Reflection\Types\Boolean;

#[OA\Schema()]
class Error401Response extends OA\Response
{
    public function __construct(
    ) {
        parent::__construct(
            response: 401,
            description: 'Возвращает ошибку при окончании жизненного цикла токена',
            content: new OA\JsonContent(
                ref: '#/components/schemas/ErrorData'
            )
        );
    }
}
