<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHelicopterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HelicopterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $helicopters = DB::table('helicopters')
            ->select('helicopters.*')
            ->orderBy('helicopters.name')
            ->get();
        return view('helicopters.index', ['helicopters' => $helicopters]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('helicopters.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreHelicopterRequest $request)
    {
        $validated = $request->validated();
        if (DB::table('helicopters')->insert($validated)) {
            return redirect()->route('helicopters.index')->with('success', 'Helicopter created successfully');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $helicopter = DB::table('helicopters')
            ->select('helicopters.*')
            ->where('helicopters.id', '=', $id)
            ->first();

        if (!$helicopter) {
            abort(404);
        }

        return view('helicopters.show', ['helicopter' => $helicopter]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $helicopter = DB::table('helicopters')
            ->select('helicopters.*')
            ->where('helicopters.id', '=', $id)
            ->first();
        return view('helicopters.edit', ['helicopter' => $helicopter]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreHelicopterRequest $request, string $id)
    {
        $validated = $request->validated();
        DB::table('helicopters')
            ->where('id', '=', $id)
            ->update($validated);
        return redirect()->route('helicopters.show', $id)->with('success', 'Helicopters updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('helicopters')->delete($id);
        return redirect()->route('helicopters.index')->with('success', 'Helicopter deleted successfully');
    }
}
