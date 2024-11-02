<?php

namespace App\Http\Controllers;

use App\Components\Error\Error400Response;
use App\Components\Error\Error401Response;
use App\Components\Error\Error403Response;
use App\Components\Error\Error500Response;
use App\Components\Lang\Data\LangData;
use App\Components\Form\FormResponse;
use App\Components\Lang\LangForm;
use App\Components\List\ListResponse;
use App\Components\Parameters\ListRequest;
use App\Components\Success\SuccessResponse;
use OpenApi\Attributes as OA;
use phpDocumentor\Reflection\Php\Factory\Type;

#[OA\Tag(
    name: 'Lang', description: 'Справочник языков'
)]
#[OA\Get(
    path: '/api/lang',
    operationId: 'getLangResponse',
    summary: 'Получение списка языков',
    tags: ['Lang'],
    parameters: [
        new OA\QueryParameter(ref: '#/components/parameters/limit'),
        new OA\QueryParameter(ref: '#/components/parameters/page')
    ],
    responses: [
        new ListResponse(data:LangData::class),
        new Error400Response(),
        new Error401Response(),
        new Error403Response(),
        new Error500Response()
    ],
)]
#[OA\Get(
    path: '/api/lang/{id}',
    summary: 'Получение языка',
    tags: ['Lang'],
    parameters: [
        new OA\Parameter(
            name: 'id',
            description: 'Id языка',
            in: 'path',
            schema: new OA\Schema(type: 'int', nullable: false),
        ),
    ],
    responses: [
            new FormResponse(data:LangData::class),
            new Error400Response(),
            new Error401Response(),
            new Error403Response(),
            new Error500Response()
        ],
    )]
#[OA\Post(
    path: '/api/lang',
    summary: 'Добавление языка',
    requestBody: new OA\RequestBody(
        required: true,
        content: new OA\JsonContent(
            ref: '#/components/schemas/LangRequest',
        ),
    ),
    tags: ['Lang'],
    responses: [
        new FormResponse(data:LangData::class),
        new Error400Response(),
        new Error401Response(),
        new Error403Response(),
        new Error500Response()
        ],
    )]
#[OA\Post(
    path: '/api/lang/{id}',
    operationId: 'postLangRequest',
    summary: 'Редактирование языка',
    requestBody: new OA\RequestBody(
        required: true,
        content: new OA\JsonContent(
            ref: '#/components/schemas/LangRequest',
        ),
    ),
    tags: ['Lang'],
    parameters: [
        new OA\Parameter(
            name: 'id',
            description: 'Id языка',
            in: 'path',
            schema: new OA\Schema(type: 'int', nullable: false),
        ),
    ],
    responses: [
        new FormResponse(data:LangData::class),
        new Error400Response(),
        new Error401Response(),
        new Error403Response(),
        new Error500Response()
    ],
)]
#[OA\Delete(
    path: '/api/lang/{id}',
    operationId: 'deleteLangRequest',
    summary: 'Удаление языка',
    tags: ['Lang'],
    parameters: [
        new OA\Parameter(
            name: 'id',
            description: 'Id языка',
            in: 'path',
            schema: new OA\Schema(type: 'int', nullable: false),
        ),
    ],
    responses: [
        new SuccessResponse(),
        new Error400Response(),
        new Error401Response(),
        new Error403Response(),
        new Error500Response()
    ],
)]
#[OA\Get(
    path: '/api/lang/form/{id}',
    summary: 'Получение формы для языка',
    tags: ['Lang'],
    parameters: [
        new OA\Parameter(
            name: 'id',
            description: 'Id языка',
            in: 'path',
            schema: new OA\Schema(type: 'int', nullable: false),
        ),
    ],
    responses: [
        new FormResponse(data:LangForm::class),
        new Error400Response(),
        new Error401Response(),
        new Error403Response(),
        new Error500Response()
    ],
)]

class LangController extends Controller {}
