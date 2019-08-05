<?php

namespace App\Http\Controllers;

use App\Call;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;

class CallsController extends Controller
{
    //



    public function index()
    {
        $calls = Call::all();
        return view('calls.index', compact('calls'));
    }

    public function create()
    {

        $call = new Call();
        return view('calls.create', compact('call'));
    }

    public function store()
    {
        //$call->authorize('create', Call::class);
        //$call = Call::create($call->validateRequest());
        $call = new Call();
        $call -> call_name = request('call_name');
        $call -> call_description = request('call_description');
        $call -> status = request('status');
        $call -> startdate = request('startdate');
        $call -> enddate = request('enddate');
        $call -> save();
        return redirect('calls');
    }

    public function edit(Call $call)
    {

        return view('calls.edit', compact('call'));
    }
    public function update(Call $call)
    //public function update(Request $request)
    {
        $call->update([
            'status' => request('status')
        ]);

        return redirect('calls/' );
    }

}
