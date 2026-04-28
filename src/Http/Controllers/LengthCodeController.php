<?php

namespace Laymont\Shicontstand\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Laymont\Shicontstand\Http\Resources\LengthCodeResource;
use Laymont\Shicontstand\Models\LengthCode;

class LengthCodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): JsonResponse
    {
        return response()->json(LengthCodeResource::collection(LengthCode::all()), 200);
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
        $lengthCode = LengthCode::find($id);

        return response()->json(new LengthCodeResource($lengthCode), 200);
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
