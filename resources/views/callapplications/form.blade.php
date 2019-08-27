<div class="form-group">
    <label for="call_name">Call(Thirrja):</label>
    <input type="text" name="call_name" value="{{ old('call_name') ?? $call->call_name }}" class="form-control" disabled>
    <div>{{ $errors->first('name') }}</div>
</div>

<div class="form-group">
    <input type="hidden" name="call_id" value="{{ old('call_id') ?? $call->id }}" class="form-control">
    <div>{{ $errors->first('name') }}</div>
</div>


<div class="form-group">
        <label for="title">Titulli i projektit:</label>
        <input type="text" name="title" value="{{ old('title') ?? $applicationcomponent->title }}" class="form-control">
        <div>{{ $errors->first('title') }}</div>
</div>
<div class="form-group">
        <label for="iden_component">Identifikimi i komponenteve:</label>
        <textarea rows="4" name="iden_component" value="{{ old('iden_component') ?? $applicationcomponent->iden_component }}" class="form-control"></textarea>
        <div>{{ $errors->first('iden_component') }}</div>
</div>

<div class="form-group">
        <label for="organisation">Emri i aplikantit:</label>
        <select class="form-control" name="organisation" >
            @foreach($organisations as $organisation)
            <option value="{{ $organisation->id }}">{{ $organisation->organisation_name }}</option>
            @endforeach
        </select>


</div>

<div class="form-group">
        <label for="unit_proposal">Njësia propozuese:</label>
        <input type="text" name="unit_proposal" value="{{ old('unit_proposal') ?? $applicationcomponent->unit_proposal }}" class="form-control">
        <div>{{ $errors->first('unit_proposal') }}</div>
</div>

<div class="form-group">
        <label for="ext_beneficary">Partnere ne projekt (te jashtem, nese ka):</label>
        <input type="text" name="ext_beneficary" value="{{ old('ext_beneficary') ?? $applicationcomponent->ext_beneficary }}" class="form-control">
        <div>{{ $errors->first('ext_beneficary') }}</div>
</div>

<div class="form-group">
        <label for="organisationpic_id[]">Partnere te regjistruar(me PIC):</label>
        <select multiple class="form-control" name="organisationpic_id[]" >
            @foreach($organisations as $organisation)
            <option value="{{ $organisation->id }}">{{ $organisation->pic }}</option>
            @endforeach
        </select>


</div>

<div class="form-group">
        <label for="budget_requested">Buxheti i kërkuar:</label>
        <input type="number" step="0.01" name="budget_requested" value="{{ old('budget_requested') ?? $applicationcomponent->budget_requested }}" class="form-control">
        <div>{{ $errors->first('budget_requested') }}</div>
</div>
<div class="form-group">
        <label for="budget_requestedakkshi">Shuma e kërkuar nga AKKSHI:</label>
        <input type="number" step="0.01" name="budget_requestedakkshi" value="{{ old('budget_requestedakkshi') ?? $applicationcomponent->budget_requestedakkshi }}" class="form-control">
        <div>{{ $errors->first('budget_requestedakkshi') }}</div>
</div>
<div class="form-group">
        <label for="budget_total">Vlera e buxhetit në total:</label>
        <input type="number" step="0.01" name="budget_total" value="{{ old('budget_total') ?? $applicationcomponent->budget_total }}" class="form-control">
        <div>{{ $errors->first('budget_total') }}</div>
</div>

<div class="form-group">
        <label for="duration">Kohëzgjatja  zbatimit të projektit(ne muaj):</label>
        <input type="number"  name="duration" value="{{ old('duration') ?? $applicationcomponent->duration }}" class="form-control">
        <div>{{ $errors->first('duration') }}</div>
</div>

<div class="form-group">
        <label for="contact_name">Personi i kontaktit:</label>
        <input type="text" name="contact_name" value="{{ old('contact_name') ?? $applicationcomponent->contact_name }}" class="form-control">
        <div>{{ $errors->first('contact_name') }}</div>
</div>

<div class="form-group">
        <label for="contact_detail">Kontakte:</label>
        <textarea rows="2" name="contact_detail" value="{{ old('contact_detail') ?? $applicationcomponent->contact_detail }}" class="form-control"></textarea>
        <div>{{ $errors->first('contact_detail') }}</div>
</div>

<div class="form-group">
        <label for="project_description">Përshkrimi i projektit:</label>
        <textarea rows="6" name="project_description" value="{{ old('project_description') ?? $applicationcomponent->project_description }}" class="form-control"></textarea>
        <div>{{ $errors->first('project_description') }}</div>
</div>

<div class="form-group">
        <label for="excepted_results">Rezultatet e pritshme:</label>
        <textarea rows="6" name="excepted_results" value="{{ old('excepted_results') ?? $applicationcomponent->excepted_results }}" class="form-control"></textarea>
        <div>{{ $errors->first('excepted_results') }}</div>
</div>

<div class="form-group">
        <label for="objectives_alike">Pajtimi me qëllimet/ synimet e programit:</label>
        <textarea rows="4" name="objectives_alike" value="{{ old('objectives_alike') ?? $applicationcomponent->objectives_alike }}" class="form-control"></textarea>
        <div>{{ $errors->first('objectives_alike') }}</div>
</div>

<div class="form-group">
        <label for="infrastructure">Infrastruktura kërkimore:</label>
        <textarea rows="4" name="infrastructure" value="{{ old('infrastructure') ?? $applicationcomponent->infrastructure }}" class="form-control"></textarea>
        <div>{{ $errors->first('infrastructure') }}</div>
</div>

<div class="form-group">
        <label for="activities">Aktivitetet e propozuara për zbatimin e projektit:</label>
        <textarea rows="4" name="activities" value="{{ old('activities') ?? $applicationcomponent->activities }}" class="form-control"></textarea>
        <div>{{ $errors->first('activities') }}</div>
</div>

<div class="form-group">
        <label for="reliability">Efektshmëria dhe qëndrueshmëria e investimit ne infrastrukturen kerkimore:</label>
        <textarea rows="4" name="reliability" value="{{ old('reliability') ?? $applicationcomponent->reliability }}" class="form-control"></textarea>
        <div>{{ $errors->first('reliability') }}</div>
</div>



@csrf
