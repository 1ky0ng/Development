<?php

namespace App\Http\Controllers;

use App\Models\VATBusinessPostingGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VATBusinessPostingGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vatbusspostinggroups = VATBusinessPostingGroup::all();

        return view('vatbusspostinggroups.index')
            ->with('vatbusspostinggroups', $vatbusspostinggroups);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\VATBusinessPostingGroup  $vatbusspostinggroup
     * @return \Illuminate\Http\Response
     */
    public function show(VATBusinessPostingGroup $vatbusspostinggroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VATBusinessPostingGroup  $vatbusspostinggroup
     * @return \Illuminate\Http\Response
     */
    public function edit(VATBusinessPostingGroup $vatbusspostinggroup)
    {
        return view('vatbusspostinggroups.edit')
            ->with('vatbusspostinggroup', $vatbusspostinggroup);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VATBusinessPostingGroup  $vatbusspostinggroup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VATBusinessPostingGroup $vatbusspostinggroup)
    {
        $vatbusspostinggroup->fill($request->input());
        $vatbusspostinggroup->save();

        return redirect()->action([VATBusinessPostingGroupController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VATBusinessPostingGroup  $vatbusspostinggroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(VATBusinessPostingGroup $vatbusspostinggroup)
    {
        //
    }
}
