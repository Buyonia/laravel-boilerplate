@extends('layouts.main')
@section('content')
<!-- BEGIN: Content-->
<div class="app-content content">

    <div class="row match-height">
        <!-- Medal Card -->

        <div class="col-xl-4 col-md-4 col-12 mx-auto">

            <div class="card">

                <div class="card-body">
                    <h1 class="text-center">Update permission</h1>

                    <form action="{{ route('permission.update',$edit_permission->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" id="name" value="{{ old('name') ?? $edit_permission->name }}" placeholder="Name">
                            @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div>
                            <a href="{{ url('/permission')  }}" class="btn btn-danger">Back</a>
                            <button type="submit" class="btn btn-primary float-right">Update</button>
                        </div>


                    </form>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- END: Content-->

@endsection
