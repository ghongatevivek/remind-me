@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    {{ __('Manage Reminder Type') }} 
                    <a href="{{route('reminderTypes.create')}}" style="float: right;" class=" btn btn-success">Create</a>
                </div>
                <div class="card-body">
                    
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($reminderTypes as $value)
                                <tr>
                                    <td>{{$value->name}}</td>
                                    <td>{{$value->status == 0 ? Deactive : 'Active'}}</td>
                                    <td>
                                        <a href="{{route('reminderTypes.edit', $value->id)}}" class="btn btn-success">Edit</a>
                                        <a>
                                            <form action="{{ route('reminderTypes.destroy',$value->id) }}" method="POST">
                                                @csrf <!-- CSRF token -->
                                                @method('DELETE') <!-- Spoof DELETE request -->
                                                
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </a>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
