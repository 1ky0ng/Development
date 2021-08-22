<?php

namespace App\Http\Controllers;

use App\Models\GLAccount;
use App\Models\AccountCategory;
use App\Models\AccountType;
use App\Models\IncomeBalance;
use App\Models\DebitCredit;
use App\Models\Status;
use App\Models\GenPostingType;
use App\Models\GenBusinessPostingGroup;
use App\Models\GenProductPostingGroup;
use App\Models\VATBusinessPostingGroup;
use App\Models\VATProductPostingGroup;
use App\Models\WHTBusinessPostingGroup;
use App\Models\WHTProductPostingGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class GLAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $glaccounts = GLAccount::where('status', 1)->get();

        return view('glaccounts.index')
            ->with('glaccounts', $glaccounts)
            ->with('AccountCategories', AccountCategory::pluck('title','id'))
            ->with('IncomeBalances', IncomeBalance::pluck('title','id'))
            ->with('AccountTypes', AccountType::pluck('title','id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('glaccounts.create')
            ->with('glaccount', (new GLAccount()))
            ->with('AccountCategories', AccountCategory::pluck('title','id'))
            ->with('AccountTypes', AccountType::pluck('title','id'))
            ->with('IncomeBalance', IncomeBalance::pluck('title','id'))
            ->with('DebitCredit', DebitCredit::pluck('title','id'))
            ->with('Statuses', Status::pluck('title','id'))
            ->with('GenPostingTypes', GenPostingType::pluck('title','id'))
            ->with('GenBussPostingGroups', GenBusinessPostingGroup::pluck('code', 'code'))
            ->with('GenProdPostingGroups', GenProductPostingGroup::pluck('code', 'code'))
            ->with('VATBussPostingGroups', VATBusinessPostingGroup::pluck('code', 'code'))
            ->with('VATProdPostingGroups', VATProductPostingGroup::pluck('code', 'code'))
            ->with('WHTBussPostingGroups', WHTBusinessPostingGroup::pluck('code', 'code'))
            ->with('WHTProdPostingGroups', WHTProductPostingGroup::pluck('code', 'code'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $glaccount = GLAccount::create($request->input());
        
        if ($request->action == 'save') 
            return redirect()->action([GLAccountController::class, 'edit'], ['glaccount' => $glaccount]);
        elseif ($request->action == 'saveclose')
            return redirect()->action([GLAccountController::class, 'index']);
        else
        {
            //error   
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GLAccount  $gLAccount
     * @return \Illuminate\Http\Response
     */
    public function show(GLAccount $glaccount)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GLAccount  $gLAccount
     * @return \Illuminate\Http\Response
     */
    public function edit(GLAccount $glaccount)
    {
        return view('glaccounts.edit')
        ->with('glaccount', $glaccount)
        ->with('AccountCategories', AccountCategory::pluck('title','id'))
        ->with('AccountTypes', AccountType::pluck('title','id'))
        ->with('IncomeBalance', IncomeBalance::pluck('title','id'))
        ->with('DebitCredit', DebitCredit::pluck('title','id'))
        ->with('Statuses', Status::pluck('title','id'))
        ->with('GenPostingTypes', GenPostingType::pluck('title','id'))
        ->with('GenBussPostingGroups', GenBusinessPostingGroup::pluck('code', 'code'))
        ->with('GenProdPostingGroups', GenProductPostingGroup::pluck('code', 'code'))
        ->with('VATBussPostingGroups', VATBusinessPostingGroup::pluck('code', 'code'))
        ->with('VATProdPostingGroups', VATProductPostingGroup::pluck('code', 'code'))
        ->with('WHTBussPostingGroups', WHTBusinessPostingGroup::pluck('code', 'code'))
        ->with('WHTProdPostingGroups', WHTProductPostingGroup::pluck('code', 'code'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GLAccount  $gLAccount
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GLAccount $glaccount)
    {
        $glaccount->fill($request->input());
        $glaccount->save();

        if ($request->action == 'save') 
            return back()->withInput(); 
        elseif ($request->action == 'saveclose')
            return redirect()->action([GLAccountController::class, 'index']);
        else
        {
            //error   
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GLAccount  $gLAccount
     * @return \Illuminate\Http\Response
     */
    public function destroy(GLAccount $glaccount)
    {
        $glaccount->delete();
        return redirect()->action([GLAccountController::class, 'index']);
            //->with('success','Product deleted successfully');
    }
}   
