<?php

namespace App\Http\Controllers;

use App\Models\WHTBusinessPostingGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WHTBusinessPostingGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $whtbusspostinggroups = WHTBusinessPostingGroup::all();

        return view('whtbusspostinggroups.index')
            ->with('whtbusspostinggroups', $whtbusspostinggroups);
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
     * @param  \App\Models\WHTBusinessPostingGroup  $whtbusspostinggroup
     * @return \Illuminate\Http\Response
     */
    public function show(WHTBusinessPostingGroup $whtbusspostinggroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WHTBusinessPostingGroup  $whtbusspostinggroup
     * @return \Illuminate\Http\Response
     */
    public function edit(WHTBusinessPostingGroup $whtbusspostinggroup)
    {
        return view('whtbusspostinggroups.edit')
            ->with('whtbusspostinggroup', $whtbusspostinggroup);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WHTBusinessPostingGroup  $whtbusspostinggroup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WHTBusinessPostingGroup $whtbusspostinggroup)
    {
        $whtbusspostinggroup->fill($request->input());
        $whtbusspostinggroup->save();

        return redirect()->action([WHTBusinessPostingGroupController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WHTBusinessPostingGroup  $whtbusspostinggroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(WHTBusinessPostingGroup $whtbusspostinggroup)
    {
        //
    }
}
