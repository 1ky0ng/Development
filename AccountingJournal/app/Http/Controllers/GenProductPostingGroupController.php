<?php

namespace App\Http\Controllers;

use App\Models\GenProductPostingGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GenProductPostingGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $genprodpostinggroups = GenProductPostingGroup::all();

        return view('genprodpostinggroups.index')
            ->with('genprodpostinggroups', $genprodpostinggroups);
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
     * @param  \App\Models\GenProductPostingGroup  $genprodpostinggroup
     * @return \Illuminate\Http\Response
     */
    public function show(GenProductPostingGroup $genprodpostinggroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GenProductPostingGroup  $genprodpostinggroup
     * @return \Illuminate\Http\Response
     */
    public function edit(GenProductPostingGroup $genprodpostinggroup)
    {
        return view('genprodpostinggroups.edit')
            ->with('genprodpostinggroup', $genprodpostinggroup);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GenProductPostingGroup  $genprodpostinggroup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GenProductPostingGroup $genprodpostinggroup)
    {
        $genprodpostinggroup->fill($request->input());
        $genprodpostinggroup->save();

        return redirect()->action([GenProductPostingGroupController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GenProductPostingGroup  $genprodpostinggroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(GenProductPostingGroup $genprodpostinggroup)
    {
        //
    }
}
