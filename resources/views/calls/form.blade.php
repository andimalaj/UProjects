<div class="form-group">
    <label for="call_name">Emertimi</label>
    <input type="text" name="call_name" value="{{ old('call_name') ?? $call->call_name }}" class="form-control">
    <div>{{ $errors->first('name') }}</div>
</div>

<div class="form-group">
    <label for="call_description">Pershkrimi</label>
    <input type="text" name="call_description" value="{{ old('call_description') ?? $call->call_description }}" class="form-control">
    <div>{{ $errors->first('call_description') }}</div>
</div>

<div class="form-group">
    <label for="startdate">StartDate</label>
    <input type="date" name="startdate" value="{{ old('startdate') ?? $call->startdate }}" class="form-control">
    <div>{{ $errors->first('startdate') }}</div>
</div>

<div class="form-group">
    <label for="enddate">EndDate</label>
    <input type="date" name="enddate" value="{{ old('enddate') ?? $call->enddate }}" class="form-control">
    <div>{{ $errors->first('enddate') }}</div>
</div>

<div class="form-group">
    <label for="status">Status</label>
    <select name="status" id="status" class="form-control">
        <option value="" disabled>Select call status</option>

        @foreach($call->activeOptions() as $activeOptionKey => $activeOptionValue)
            <option value="{{ $activeOptionKey }}" {{ $call->active == $activeOptionValue ? 'selected' : '' }}>{{ $activeOptionValue }}</option>
        @endforeach
    </select>
</div>


@csrf
