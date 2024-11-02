<?php

namespace App\Components\Parameters;

use OpenApi\Attributes as OA;

#[OA\Schema()]
#[OA\QueryParameter(parameter: 'limit', name: 'limit', schema: new OA\Schema(type: 'integer'))]
#[OA\QueryParameter(parameter: 'page', name: 'page', schema: new OA\Schema(type: 'integer'))]

class ListRequest
{}
