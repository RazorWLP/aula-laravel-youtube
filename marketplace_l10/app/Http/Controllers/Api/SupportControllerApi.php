<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Services\SupportService;
use App\Http\Controllers\Controller;
use App\DTO\Supports\CreateSupportDTO;
use App\Http\Resources\SupportResource;
use App\Http\Requests\StoreUpdateSupport;

class SupportControllerApi extends Controller
{

    public function __construct( protected SupportService $service){

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUpdateSupport $request)
    {
        $support = $this->service->new(CreateSupportDTO::makeFromRequest($request));

        return new SupportResource($support);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        if(!$support = $this->service->findOne($id)){
            return response()->json([
                'error' => 'Not Found'
            ], Response::HTTP_NOT_FOUND);
        }
        return new SupportResource($support);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if(!$this->service->findOne($id)){
            return response()->json([
                'error' => 'Not Found'
            ], Response::HTTP_NOT_FOUND);
        }

        $this->service->delete($id);

        return response()->json([], Response::HTTP_NO_CONTENT);
    }
}
