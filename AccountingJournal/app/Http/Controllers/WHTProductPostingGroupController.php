<?php

namespace App\Http\Controllers;

use App\Models\WHTProductPostingGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WHTProductPostingGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $whtprodpostinggroups = WHTProductPostingGroup::all();

        return view('whtprodpostinggroups.index')
            ->with('whtprodpostinggroups', $whtprodpostinggroups);
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
     * @param  \App\Models\WHTProductPostingGroup  $whtprodpostinggroup
     * @return \Illuminate\Http\Response
     */
    public function show(WHTProductPostingGroup $whtprodpostinggroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WHTProductPostingGroup  $whtprodpostinggroup
     * @return \Illuminate\Http\Response
     */
    public function edit(WHTProductPostingGroup $whtprodpostinggroup)
    {
        return view('whtprodpostinggroups.edit')
            ->with('whtprodpostinggroup', $whtprodpostinggroup);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WHTProductPostingGroup  $whtprodpostinggroup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WHTProductPostingGroup $whtprodpostinggroup)
    {
        $whtprodpostinggroup->fill($request->input());
        $whtprodpostinggroup->save();

        return redirect()->action([WHTProductPostingGroupController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WHTProductPostingGroup  $whtprodpostinggroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(WHTProductPostingGroup $whtprodpostinggroup)
    {
        //
    }
}
