<?php

namespace App\Components\Success;

use OpenApi\Attributes as OA;
use phpDocumentor\Reflection\Types\Boolean;

#[OA\Schema()]
class SuccessResponse extends OA\Response
{
    public function __construct(
    ) {
        parent::__construct(
            response: 200,
            description: 'Возвращает сообщение об успехе',
            content: new OA\JsonContent(
                ref: '#/components/schemas/SuccessData'
            )
        );
    }
}
