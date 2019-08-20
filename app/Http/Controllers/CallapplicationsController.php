<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Callapplication;
use App\Call;
use App\Organisation;

class CallapplicationsController extends Controller
{
    //
    /*
    public function index()
    {
        $callapplications = Callapplication::all();
        return view('calls.index', compact('calls'));
    }

    public function aplikimi()
    {
        $calls = Call::all();
        return view('calls.aplikimi', compact('calls'));
    }

    */

    public function aplikimet(Call $call)
    {
        $callapplications = Callapplication::all();
        return view('callapplications.aplikimet', compact('callapplications','call'));
    }

    public function create(Call $call)
    {

        $callapplication = new Callapplication();
        //$callapplication -> call = $call;
        $organisations =  Organisation::all();
       // $organisations = Organisation::pluck('organisation_name', 'id');
        return view('callapplications.create', compact('callapplication','call','organisations'));
    }

    public function store(Call $call)
    {
        //$call->authorize('create', Call::class);
        //$call = Call::create($call->validateRequest());
        $callapplication = new Callapplication();
        $callapplication -> call_id = request('call_id');
        //$callapplication -> organisation = request('organisation');
        $callapplication -> save();
        return redirect('aplikimi');
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
