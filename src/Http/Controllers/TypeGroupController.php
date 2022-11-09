<?php

namespace Laymont\Shicontstand\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Laymont\Shicontstand\Http\Resources\TypeGroupResource;
use Laymont\Shicontstand\Models\TypeGroup;

class TypeGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index(): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        return TypeGroupResource::collection(TypeGroup::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        return response()->json([
            'message' => 'Prohibited Resource',
        ], 403);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return JsonResponse
     */
    public function show($id): JsonResponse
    {
        $typeGroup = TypeGroup::find($id);

        return response()->json(new TypeGroupResource($typeGroup), 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return JsonResponse
     */
    public function destroy(int $id): JsonResponse
    {
        return response()->json([
            'message' => 'Prohibited Resource',
        ], 403);
    }
}
