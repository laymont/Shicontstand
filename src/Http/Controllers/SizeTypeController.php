<?php

namespace Laymont\Shicontstand\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Laymont\Shicontstand\Http\Resources\SizeTypeResource;
use Laymont\Shicontstand\Models\SizeType;

class SizeTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        return response()->json(SizeTypeResource::collection(SizeType::all()), 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): JsonResponse
    {
        return $this->responseProhibited();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): JsonResponse
    {
        $sizeType = SizeType::find($id);

        return response()->json(new SizeTypeResource($sizeType), 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id): JsonResponse
    {
        return $this->responseProhibited();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id): JsonResponse
    {
        return $this->responseProhibited();
    }
}
