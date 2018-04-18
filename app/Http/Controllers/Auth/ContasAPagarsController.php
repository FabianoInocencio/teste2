<?php

namespace App\Http\Controllers\Admin;

use App\ContasAPagar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreContasAPagarsRequest;
use App\Http\Requests\Admin\UpdateContasAPagarsRequest;

class ContasAPagarsController extends Controller
{
    /**
     * Display a listing of ContasAPagar.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('contas_a_pagar_access')) {
            return abort(401);
        }


                $contas_a_pagars = ContasAPagar::all();

        return view('admin.contas_a_pagars.index', compact('contas_a_pagars'));
    }

    /**
     * Show the form for creating new ContasAPagar.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('contas_a_pagar_create')) {
            return abort(401);
        }
        return view('admin.contas_a_pagars.create');
    }

    /**
     * Store a newly created ContasAPagar in storage.
     *
     * @param  \App\Http\Requests\StoreContasAPagarsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreContasAPagarsRequest $request)
    {
        if (! Gate::allows('contas_a_pagar_create')) {
            return abort(401);
        }
        $contas_a_pagar = ContasAPagar::create($request->all());



        return redirect()->route('admin.contas_a_pagars.index');
    }


    /**
     * Show the form for editing ContasAPagar.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('contas_a_pagar_edit')) {
            return abort(401);
        }
        $contas_a_pagar = ContasAPagar::findOrFail($id);

        return view('admin.contas_a_pagars.edit', compact('contas_a_pagar'));
    }

    /**
     * Update ContasAPagar in storage.
     *
     * @param  \App\Http\Requests\UpdateContasAPagarsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateContasAPagarsRequest $request, $id)
    {
        if (! Gate::allows('contas_a_pagar_edit')) {
            return abort(401);
        }
        $contas_a_pagar = ContasAPagar::findOrFail($id);
        $contas_a_pagar->update($request->all());



        return redirect()->route('admin.contas_a_pagars.index');
    }


    /**
     * Display ContasAPagar.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('contas_a_pagar_view')) {
            return abort(401);
        }
        $contas_a_pagar = ContasAPagar::findOrFail($id);

        return view('admin.contas_a_pagars.show', compact('contas_a_pagar'));
    }


    /**
     * Remove ContasAPagar from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('contas_a_pagar_delete')) {
            return abort(401);
        }
        $contas_a_pagar = ContasAPagar::findOrFail($id);
        $contas_a_pagar->delete();

        return redirect()->route('admin.contas_a_pagars.index');
    }

    /**
     * Delete all selected ContasAPagar at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('contas_a_pagar_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = ContasAPagar::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }

}
