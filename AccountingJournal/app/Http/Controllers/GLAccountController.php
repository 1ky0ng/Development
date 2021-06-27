<?php

namespace App\Http\Controllers;

use App\Models\GLAccount;
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
        $Statuses = GLAccount::Statuses;

        return view('glaccounts.index')
            ->with('glaccounts', $glaccounts)
            ->with('Statuses', $Statuses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $glaccount = new GLAccount();
        $glaccount->dd();

        $AccountCategories = GLAccount::AccountCategories;
        $AccountTypes = GLAccount::AccountTypes;
        $IncomeBalance = GLAccount::IncomeBalance;
        $DebitCredit = GLAccount::DebitCredit;
        $Statuses = GLAccount::Statuses;
        $GenPostingTypes = GLAccount::GenPostingTypes;

        return view('glaccounts.create')
        ->with('glaccount', (new GLAccount()))
        ->with('AccountCategories', $AccountCategories)
        ->with('AccountTypes', $AccountTypes)
        ->with('IncomeBalance', $IncomeBalance)
        ->with('DebitCredit', $DebitCredit)
        ->with('Statuses', $Statuses)
        ->with('GenPostingTypes', $GenPostingTypes);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($no_)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(GLAccount $glaccount)
    {
        $AccountCategories = GLAccount::AccountCategories;
        $AccountTypes = GLAccount::AccountTypes;
        $IncomeBalance = GLAccount::IncomeBalance;
        $DebitCredit = GLAccount::DebitCredit;
        $Statuses = GLAccount::Statuses;
        $GenPostingTypes = GLAccount::GenPostingTypes;

        return view('glaccounts.edit')
        ->with('glaccount', $glaccount)
        ->with('AccountCategories', $AccountCategories)
        ->with('AccountTypes', $AccountTypes)
        ->with('IncomeBalance', $IncomeBalance)
        ->with('DebitCredit', $DebitCredit)
        ->with('Statuses', $Statuses)
        ->with('GenPostingTypes', $GenPostingTypes);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GLAccount $glaccount)
    {
        $request->dd();
        $glaccount->fill($request->input());
        $glaccount->save();

        //  $booking->fill($request->input());
        // $booking->save();
        // $booking->users()->sync([$request->input('user_id')]);


        return redirect()->action([GLAccountController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($no_)
    {
        //
    }
}