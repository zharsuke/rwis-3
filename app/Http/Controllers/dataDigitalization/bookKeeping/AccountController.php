<?php

namespace App\Http\Controllers\dataDigitalization\bookKeeping;

use App\Http\Controllers\Controller;
use App\Models\AccountModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Auth::check() ? view('data-digitalization.book-keeping.account.index') : redirect('/login');
    }

    public function archived() {
        return Auth::check() ? view('data-digitalization.book-keeping.account.archived') : redirect('/login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $account = AccountModel::find($id);
        return Auth::check() ? view('data-digitalization.book-keeping.account.show', ['account' => $account]) : redirect('/login');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
