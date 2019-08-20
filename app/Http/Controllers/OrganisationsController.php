<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Organisation;

class OrganisationsController extends Controller
{
    //



    public function index()
    {
        $organisations = Organisation::all();
        return view('organisations.index', compact('organisations'));
    }

    public function create()
    {

        $organisation = new Organisation();
        return view('organisations.create', compact('organisation'));
    }

    public function store()
    {
        //$call->authorize('create', Call::class);
        //$call = Call::create($call->validateRequest());
        $organisation = new Organisation();
        $organisation -> organisation_name = request('organisation_name');
        $organisation -> organisation_description = request('organisation_description');
        $organisation -> pic = request('pic');
        $organisation -> status = request('status');
        $organisation -> save();
        return redirect('organisations');
    }

    public function edit(Organisation $organisation)
    {

        return view('organisations.edit', compact('organisation'));
    }
    public function update(Organisation $organisation)
    //public function update(Request $request)
    {
        $organisation->update([
            'status' => request('status')
        ]);

        return redirect('organisations/' );
    }




}
