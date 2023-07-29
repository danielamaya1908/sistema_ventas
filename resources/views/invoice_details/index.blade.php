@extends('app')

@section('content')

<div class="container mt-4">
    <!-- Barra de navegación -->
    <div class="d-flex justify-content-between mb-3">
        <div><a href="/" class="btn btn-primary">Home</a></div>
        <div><a href="{{ route('invoice_details.create')}}" class="btn btn-success">New Invoice Detail</a></div>
    </div>

    <!-- Mostrar mensaje si existe -->
    @if(session('message'))
        <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Cantidad</th>
                    <th>Bill ID</th>
                    <th>Product ID</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse($invoice_details as $key => $invoiceDetail)
                    <tr>
                        <td>{{ $loop->iteration }}.</td>
                        <td>{{ $invoiceDetail->cantidad }}</td>
                        <td>{{ $invoiceDetail->bill_id }}</td>
                        <td>{{ $invoiceDetail->product_id }}</td>
                        <td>
                            <a href="{{ route('invoice_details.edit', $invoiceDetail) }}" class="btn btn-primary btn-sm">Edit</a>

                            <form action="{{ route('invoice_details.delete', $invoiceDetail)}}" method="post" style="display: inline;">
                                @csrf
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button> 
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5">No data found in table</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection
