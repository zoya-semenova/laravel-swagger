<?php

namespace App\Http\Controllers;

use OpenApi\Attributes as OA;

#[OA\Get(
    path: '/api/sample',
    operationId: 'getSampleResponse',
    summary: 'Show sample response',
    tags: ['Sample'],
    responses: [
        new OA\Response(
            response: 200,
            description: 'If found or an empty list if not found',
            content: new OA\JsonContent(
                type: 'array',
                items: new OA\Items(ref: '#/components/schemas/SampleData')
            )
        ),
    ],
)]
class SampleController extends Controller {}
