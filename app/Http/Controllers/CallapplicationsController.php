<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Callapplication;
use App\Call;
use App\Organisation;
use App\Applicationcomponent;

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
        $applicationcomponent = new Applicationcomponent();
        //$callapplication -> call = $call;
        $organisations =  Organisation::all();
       // $organisations = Organisation::pluck('organisation_name', 'id');
        return view('callapplications.create', compact('callapplication','call','organisations','applicationcomponent'));
    }

    public function store(Call $call)
    {
        //$call->authorize('create', Call::class);
        //$call = Call::create($call->validateRequest());
        $callapplication = new Callapplication();
        $applicationcomponent = new Applicationcomponent();
        $callapplication -> call_id = request('call_id');
        $callapplication -> organisation_id = request('organisation');
        $callapplication -> save();
        $applicationcomponent -> callapplication_id = $callapplication->id;
        $applicationcomponent -> title = request('title');
        $applicationcomponent -> iden_component = request('iden_component');
        $applicationcomponent -> app_name = request('app_name');
        $applicationcomponent -> unit_proposal = request('unit_proposal');
        $applicationcomponent -> ext_beneficary = request('ext_beneficary');
        $applicationcomponent -> budget_requested = request('budget_requested');
        $applicationcomponent -> budget_requestedakkshi = request('budget_requestedakkshi');
        $applicationcomponent -> budget_total = request('budget_total');
        $applicationcomponent -> duration = request('duration');
        $applicationcomponent -> contact_name = request('contact_name');
        $applicationcomponent -> contact_detail = request('contact_detail');
        $applicationcomponent -> project_description = request('project_description');
        $applicationcomponent -> excepted_results = request('excepted_results');
        $applicationcomponent -> objectives_alike = request('objectives_alike');
        $applicationcomponent -> infrastructure = request('infrastructure');
        $applicationcomponent -> activities = request('activities');
        $applicationcomponent -> reliability = request('reliability');
        $applicationcomponent -> save();
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
