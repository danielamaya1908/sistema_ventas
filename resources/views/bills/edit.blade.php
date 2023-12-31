@extends('dashboard')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3>Edit Bill</h3>
                        <a href="{{ route('bills.index')}}" class="btn btn-secondary">Back to List</a>
                    </div>
                </div>
                <div class="card-body">
                    @if(session('message'))
                        <div class="alert alert-success">{{ session('message') }}</div>
                    @endif

                    <form action="{{ route('bills.update', $bill)}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="total" class="form-label">Total</label>
                            <input type="number" name="total" id="total" class="form-control" placeholder="Enter total" value="{{ $bill->total }}">
                            @error('total')
                                <div class="text-danger">{{ $message}}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="subtotal" class="form-label">Subtotal</label>
                            <input type="number" name="subtotal" id="subtotal" class="form-control" placeholder="Enter subtotal" value="{{ $bill->subtotal }}">
                            @error('subtotal')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="client_id" class="form-label">Client ID</label>
                            <input type="number" name="client_id" id="client_id" class="form-control" placeholder="Enter client ID" value="{{ $bill->client_id }}">
                            @error('client_id')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="employee_id" class="form-label">Employee ID</label>
                            <input type="number" name="employee_id" id="employee_id" class="form-control" placeholder="Enter employee ID" value="{{ $bill->employee_id }}">
                            @error('employee_id')
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
