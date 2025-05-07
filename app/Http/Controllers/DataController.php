<?php

namespace App\Http\Controllers;

use App\Helpers\ResponseFormatter;
use App\Http\Requests\StoreDataRequest;
use App\Http\Requests\UpdateDataRequest;
use App\Models\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Data::query();

        foreach ($request->query() as $field => $value) {
            if ($field === "page") {
                continue;
            }

            if (in_array($field, Schema::getColumnListing('data'))) {
                $query->where($field, 'LIKE', "%{$value}%");
            } else {
                return ResponseFormatter::error(
                    'Invalid query parameter',
                    $field,
                    400
                );
            }
        }

        $data = $query->paginate(10);
        return ResponseFormatter::success(
            $data,
            'Data retrieved successfully'
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDataRequest $request)
    {
        $data = Data::create($request->validated());

        return ResponseFormatter::success(
            $data,
            'Data created successfully',
            201
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(Data $data)
    {
        return ResponseFormatter::success(
            $data,
            'Data retrieved successfully'
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDataRequest $request, Data $data)
    {
        $data->update($request->validated());

        return ResponseFormatter::success(
            $data,
            'Data updated successfully'
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Data $data)
    {
        $data->delete();

        return ResponseFormatter::success(
            '',
            'Data deleted successfully',
            200
        );
    }
}
