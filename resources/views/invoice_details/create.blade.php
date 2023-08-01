@extends('dashboard')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3>Create Invoice Detail</h3>
                        <a href="{{ route('invoice_details.index')}}" class="btn btn-secondary">Back to List</a>
                    </div>
                </div>
                <div class="card-body">
                    @if(session('message'))
                        <div class="alert alert-success">{{ session('message') }}</div>
                    @endif

                    <form action="{{ route('invoice_details.store')}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="cantidad" class="form-label">Cantidad</label>
                            <input type="number" name="cantidad" id="cantidad" class="form-control" placeholder="Enter cantidad" value="{{ old('cantidad')}}">
                            @error('cantidad')
                                <div class="text-danger">{{ $message}}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="bill_id" class="form-label">Bill ID</label>
                            <input type="number" name="bill_id" id="bill_id" class="form-control" placeholder="Enter bill ID" value="{{ old('bill_id')}}">
                            @error('bill_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="product_id" class="form-label">Product ID</label>
                            <input type="number" name="product_id" id="product_id" class="form-control" placeholder="Enter product ID" value="{{ old('product_id')}}">
                            @error('product_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
