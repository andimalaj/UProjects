<div class="form-group">
    <label for="call_name">Emertimi</label>
    <input type="text" name="call_name" value="{{ old('call_name') ?? $call->call_name }}" class="form-control" disabled>
    <div>{{ $errors->first('name') }}</div>
</div>

<div class="form-group">
    <input type="hidden" name="call_id" value="{{ old('call_id') ?? $call->id }}" class="form-control">
    <div>{{ $errors->first('name') }}</div>
</div>

<div class="form-group">

        <select class="form-control" name="dropdown">
          @foreach($organisations as $organisation)
          <option value="{{ $organisation->id }}">{{ $organisation->organisation_name }}</option>
          @endforeach
        </select>


</div>

@csrf
