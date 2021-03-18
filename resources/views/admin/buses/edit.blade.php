
@extends('layouts.admin')

@section('main-content')

<div class="container">
    
    <div class="row justify-content-center">
        <div class="col-md-12">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

            <div class="card shadow">
                <div class="card-header bg-primary d-sm-flex align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-white">Edit</h6>
                    <a class="btn btn-light btn-sm" href="{{ route('buses.index') }}"><i class="fas fa-long-arrow-alt-left"></i></a>
                </div>
                    <form method="POST" action="{{ route('buses.update',$bus->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <input type="number" class="form-control" value="{{ $bus->bus_no }}" placeholder="Bus No" name="bus_no">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" value="{{ $bus->bus_plate }}" placeholder="Bus Plate" name="bus_plate">
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="bus_class">
                            <option value="{{ $bus->bus_class }}">Select Class</option>
                            <option>Ordinary Bus</option>
                            <option>Regular Airconditioned</option>
                            <option>Deluxe</option>
                            <option>Super Deluxe</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" value="{{ $bus->bus_seat }}" placeholder="Bus Seat" name="bus_seat">
                        </div>
                    </div>
                    <div class="card-footer bg-primary d-flex justify-content-end">
                        <button type="submit" class="btn btn-light btn-sm"><i class="fas fa-save"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection