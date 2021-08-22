<?php

namespace App\Http\Controllers;

use App\Models\VATProductPostingGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VATProductPostingGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vatprodpostinggroups = VATProductPostingGroup::all();

        return view('vatprodpostinggroups.index')
            ->with('vatprodpostinggroups', $vatprodpostinggroups);
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
     * @param  \App\Models\VATProductPostingGroup  $vatprodpostinggroup
     * @return \Illuminate\Http\Response
     */
    public function show(VATProductPostingGroup $vatprodpostinggroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\VATProductPostingGroup  $vatprodpostinggroup
     * @return \Illuminate\Http\Response
     */
    public function edit(VATProductPostingGroup $vatprodpostinggroup)
    {
        return view('vatprodpostinggroups.edit')
            ->with('vatprodpostinggroup', $vatprodpostinggroup);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\VATProductPostingGroup  $vatprodpostinggroup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, VATProductPostingGroup $vatprodpostinggroup)
    {
        $vatprodpostinggroup->fill($request->input());
        $vatprodpostinggroup->save();

        return redirect()->action([VATProductPostingGroupController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\VATProductPostingGroup  $vatprodpostinggroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(VATProductPostingGroup $vatprodpostinggroup)
    {
        //
    }
}
