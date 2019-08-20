<div class="form-group">
    <label for="organisation_name">Emertimi</label>
    <input type="text" name="organisation_name" value="{{ old('organisation_name') ?? $organisation->organisation_name }}" class="form-control">
    <div>{{ $errors->first('name') }}</div>
</div>

<div class="form-group">
    <label for="organisation_description">Pershkrimi</label>
    <input type="text" name="organisation_description" value="{{ old('organisation_description') ?? $organisation->organisation_description }}" class="form-control">
    <div>{{ $errors->first('name') }}</div>
</div>

<div class="form-group">
    <label for="pic">PIC</label>
    <input type="text" name="pic" value="{{ old('pic') ?? $organisation->pic }}" class="form-control">
    <div>{{ $errors->first('pic') }}</div>
</div>

<div class="form-group">
    <label for="status">Status</label>
    <select name="status" id="status" class="form-control">
        <option value="" disabled>Select organisation status</option>

        @foreach($organisation->activeOptions() as $activeOptionKey => $activeOptionValue)
            <option value="{{ $activeOptionKey }}" {{ $organisation->active == $activeOptionValue ? 'selected' : '' }}>{{ $activeOptionValue }}</option>
        @endforeach
    </select>
</div>


@csrf
