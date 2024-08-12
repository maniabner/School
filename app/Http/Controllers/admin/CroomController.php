<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Croom;
use App\Models\Teacher;
use Illuminate\Http\Request;

class CroomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $crooms = Croom::all();
        return view('admin.crooms.index',compact('crooms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.crooms.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

            Croom::create([
                'name'=>$request->name,

            ]);
            return redirect()->route('admin.crooms.index');
        }


    /**
     * Display the specified resource.
     */
    public function show(Croom $croom)
    {
        return view('admin.crooms.show',compact('croom'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Croom $croom)
    {
        return view('admin.crooms.edit',compact('croom'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Croom $croom)
    {

        $croom->update([
                'name'=>$request->name,

            ]);
            return redirect()->route('admin.crooms.index');
        }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Croom $croom)
    {
        $croom->delete();
        return redirect()->route('admin.crooms.index');
    }
}
