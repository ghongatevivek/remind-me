@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                
                <div class="card-body">
                    <h4>Update Reminder Type</h4>
                   <form action="{{route('reminderTypes.update',$reminderType->id)}}" method="POST">
                    @csrf
                    @method('put')
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" value="{{ $reminderType->name }}">

                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>
                            <input type="submit" value="Update" class="btn btn-info">
                        
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
