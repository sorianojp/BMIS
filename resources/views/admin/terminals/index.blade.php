@extends('layouts.admin')

@section('main-content')


<div class="container">

<div class="row justify-content-center">
    <div class="col-lg-12">
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        {{ $message }}
    </div>
    @endif
        <div class="card shadow mb-4">
            <div class="card-header bg-primary d-sm-flex align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-white">Terminals</h6>
                <a class="btn btn-light btn-sm" href="{{ route('terminals.create') }}"><i class="fas fa-plus"></i></a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Adress</th>
                                <th style="width: 130px">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($terminals as $terminal)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $terminal->terminal_name }}</td>
                                <td>{{ $terminal->terminal_address }}</td>
                                <td class="d-flex justify-content-around">
                                        <form action="{{ route('terminals.destroy',$terminal->id) }}" method="POST">
                        
                                            <a class="btn btn-info btn-sm" href="{{ route('terminals.show',$terminal->id) }}"><i class="fas fa-eye"></i></a>
                            
                                            <a class="btn btn-primary btn-sm" href="{{ route('terminals.edit',$terminal->id) }}"><i class="fas fa-edit"></i></a>
                        
                                            @csrf
                                            @method('DELETE')
                            
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                                        </form>
                                    </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                {!! $terminals->links() !!}
            </div>
        </div>
    </div>
</div>

</div>

@endsection
