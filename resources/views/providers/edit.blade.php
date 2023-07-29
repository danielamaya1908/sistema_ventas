@extends('app')

@section('content')

<div class="container mt-4">
    <!-- Barra de navegación -->
    <div class="d-flex justify-content-between mb-3">
        <div><a href="/" class="btn btn-primary">Home</a></div>
        <div><a href="{{ route('providers.index')}}" class="btn btn-secondary">Back to List</a></div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3>Edit Provider</h3>
                        <a href="{{ route('providers.index')}}" class="btn btn-secondary">Back to List</a>
                    </div>
                </div>
                <div class="card-body">
                    @if(session('message'))
                        <div class="alert alert-success">{{ session('message') }}</div>
                    @endif

                    <form action="{{ route('providers.edit', $provider)}}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter provider" value="{{ $provider->name}}">
                            @error('name')
                                <div class="text-danger">{{ $message}}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="city_id" class="form-label">City</label>
                            <select name="city_id" id="city_id" class="form-control">
                                <option value="">Select</option>
                                @foreach($cities as $city)
                                <option
                                @if ($city->id == (int)old('city_id'))
                                    selected
                                @endif
                                value="{{ $city->id }}">{{ $city->name}}</option>
                                @endforeach
                            </select>
                            @error('city_id')
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
