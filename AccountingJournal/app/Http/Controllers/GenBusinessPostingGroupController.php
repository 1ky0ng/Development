<?php

namespace App\Http\Controllers;

use App\Models\GenBusinessPostingGroup;
use App\Http\Controllers\GenBusinessPostingGroupController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;

class GenBusinessPostingGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $genbusspostinggroups = GenBusinessPostingGroup::all();

        return view('genbusspostinggroups.index')
            ->with('genbusspostinggroups', $genbusspostinggroups);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $actiontype = 'genbusspostinggroups.store';
        $actionTypeSave = 'genbusspostinggroups.store';

        return view('genbusspostinggroups.form')
            ->with('genbusspostinggroup', (new GenBusinessPostingGroup()))
            ->with('actionTypeSave', (route($actionTypeSave)))
            ->with('formIdSave', $actionTypeSave);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $genbusspostinggroup = GenBusinessPostingGroup::create($request->input());
        
        if ($request->action == 'save') 
            return redirect()->action([GenBusinessPostingGroupController::class, 'edit'], ['genbusspostinggroup' => $genbusspostinggroup]);
        elseif ($request->action == 'saveclose')
            return redirect()->action([GenBusinessPostingGroupController::class, 'index']);
        else
        {
            //error   
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GenBusinessPostingGroup  $genBusinessPostingGroup
     * @return \Illuminate\Http\Response
     */
    public function show(GenBusinessPostingGroup $genbusspostinggroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GenBusinessPostingGroup  $genBusinessPostingGroup
     * @return \Illuminate\Http\Response
     */
    public function edit(GenBusinessPostingGroup $genbusspostinggroup)
    {
        $actionTypeSave = 'genbusspostinggroups.update';
        $actionTypeDelete = 'genbusspostinggroups.destroy';

        // {{ route('genbusspostinggroups.destroy',$genbusspostinggroup->code) }}

        return view('genbusspostinggroups.form')
            ->with('genbusspostinggroup', $genbusspostinggroup)
            ->with('actionTypeSave', (route($actionTypeSave, ['genbusspostinggroup' => $genbusspostinggroup])))
            ->with('actionTypeDelete', (route($actionTypeDelete, ['genbusspostinggroup' => $genbusspostinggroup])))
            ->with('formIdSave', $actionTypeSave)
            ->with('formIdDelete', $actionTypeDelete);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GenBusinessPostingGroup  $genBusinessPostingGroup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GenBusinessPostingGroup $genbusspostinggroup)
    {
        $genbusspostinggroup->fill($request->input());
        $genbusspostinggroup->save();
            
        if ($request->action == 'save') 
            return back()->withInput(); 
        elseif ($request->action == 'saveclose')
            return redirect()->action([GenBusinessPostingGroupController::class, 'index']);
        elseif ($request->action == 'delete')
        {
            Route::delete('genbusspostinggroups' , 'GenBusinessPostingGroupController@destroy');
            // return redirect()->action(route('genbusspostinggroups.destroy', ['genbusspostinggroup' => $genbusspostinggroup]));
        }
        else
        {
            //error   
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GenBusinessPostingGroup  $genBusinessPostingGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(GenBusinessPostingGroup $genbusspostinggroup)
    {
        $genbusspostinggroup->delete();
        return redirect()->action([GenBusinessPostingGroupController::class, 'index']);
            //->with('success','Product deleted successfully');
    }
}
