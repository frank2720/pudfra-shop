<?php

namespace App\Http\Controllers\Api\V1;

use App\Filters\V1\TownFilter;
use App\Models\Town;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTownRequest;
use App\Http\Resources\V1\TownResource;
use App\Http\Requests\UpdateTownRequest;
use App\Http\Resources\V1\TownCollection;


class TownController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new TownFilter();
        $queryItems = $filter->transform($request);
        
        if (count($queryItems)==0) {
            return new TownCollection(Town::paginate());
        } else {
            $towns = Town::where($queryItems)->paginate();
            return new TownCollection($towns->appends($request->query()));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTownRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Town $town)
    {
        return new TownResource($town);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Town $town)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTownRequest $request, Town $town)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Town $town)
    {
        //
    }
}
