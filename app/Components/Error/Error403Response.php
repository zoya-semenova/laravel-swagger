<?php

namespace App\Components\Error;

use OpenApi\Attributes as OA;
use phpDocumentor\Reflection\Types\Boolean;

#[OA\Schema()]
class Error403Response extends OA\Response
{
    public function __construct(
    ) {
        parent::__construct(
            response: 403,
            description: 'Отказано в доступе',
            content: new OA\JsonContent(
                ref: '#/components/schemas/ErrorData'
            )
        );
    }
}
