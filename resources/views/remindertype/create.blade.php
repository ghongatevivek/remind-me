@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                
                <div class="card-body">
                    <h4>Create Reminder Type</h4>
                   <form action="{{route('reminderTypes.store')}}" method="POST">
                    @csrf
                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name') }}">

                            @error('name')
        <p class="text-danger">{{ $message }}</p>
    @enderror
                        </div>
                            <input type="submit" class="btn btn-info">
                        
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
