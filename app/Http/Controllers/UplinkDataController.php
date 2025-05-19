<?php

namespace App\Http\Controllers;

use App\Helpers\ResponseFormatter;
use App\Models\UplinkData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;

class UplinkDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = UplinkData::query();

        foreach ($request->query() as $field => $value) {
            if ($field === "page") {
                continue;
            }

            if (in_array($field, Schema::getColumnListing('uplink_data'))) {
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
    public function store(Request $request)
    {
        $data = UplinkData::create($request->all());

        return ResponseFormatter::success(
            $data,
            'Data created successfully',
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
        //
    }
}
