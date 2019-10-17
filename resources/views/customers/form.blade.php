
<div class="form-group">
    <label for="name">Customer Name</label>
    <input type="text" class="form-control " name="name" placeholder="Enter Customer Name" value="{{ old('name') ?? $customer->name  }}">
    @error('name')
        <p class="text-danger">{{ $errors->first('name') }}</p>
    @enderror
</div>
<div class="form-group">
    <label for="mail">Email address</label>
    <input type="text" class="form-control" name='email' placeholder="Enter email" value="{{ old('email') ?? $customer->email }}">
    @error('email')
        <p class="text-danger">{{ $errors->first('email') }}</p>
    @enderror
</div>
<div class="form-group">
    <label for="active">Customer Status </label>
    <select class="form-control" name="active" id="active">
        <option value="" disabled>Select customer status</option>
        @foreach($customer->activeOptions() as $activeOptionKey => $activeOptionValue)
            <option value="{{ $activeOptionKey }}" {{ $customer->active == $activeOptionValue ? 'selected' : '' }}>{{ $activeOptionValue }}</option>
        @endforeach
    </select>
</div>
<div class="form-group">
    <label for="company_id"> Company </label>
    <select class="form-control" name="company_id" id="company_id">
        @foreach ($companies as $company)
            <option value="{{ $company->id }}" {{ $company->id == $customer->company_id ? 'selected' : '' }}>{{ $company->name }}</option>
        @endforeach
    </select>
</div>
@csrf
