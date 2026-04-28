<?php

namespace Laymont\Shicontstand\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Laymont\Shicontstand\Http\Resources\SizeCodeResource;
use Laymont\Shicontstand\Models\SizeCode;

class SizeCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        return response()->json(SizeCodeResource::collection(SizeCode::all()), 200);
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
        $sizeCode = SizeCode::find($id);

        return response()->json(new SizeCodeResource($sizeCode), 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): JsonResponse
    {
        return $this->responseProhibited();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): JsonResponse
    {
        return $this->responseProhibited();
    }
}
