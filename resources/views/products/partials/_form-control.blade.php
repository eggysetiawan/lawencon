<div class="card-body">
    <div class="form-group">
        <label for="name">Product Name</label>
        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
            value="{{ old('name') ?? $product->name }}" placeholder="{{ __('Product name...') }}">
        @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group">
        <label for="code">Code</label>
        <input type="text" name="code" id="code" class="form-control @error('code') is-invalid @enderror"
            value="{{ old('code') ?? $product->code }}" placeholder="{{ __('Code of product...') }}">
        @error('code')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group">
        <label for="amount">Amount</label>
        <input type="number" name="amount" id="amount" class="form-control @error('amount') is-invalid @enderror amount"
            value="{{ old('amount') ?? $product->amount }}" min="0">

        @error('amount')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group">
        <label for="date">Date</label>
        <input type="date" name="date" id="date" class="form-control @error('date') is-invalid @enderror"
            value="{{ old('date') ?? date('Y-m-d', strtotime($product->date ?? now())) }}">
        @error('date')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

</div>

<div class="card-footer">
    <button type="submit" class="btn btn-primary">{{ __('Create') }}</button>
</div>
