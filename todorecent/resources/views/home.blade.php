@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('dashbord' ) }}</div>
<x-alert />
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>


<!-- <div class="card-body">
    <form action="/upload" method="post">
    @csrf
    <input type="file" name="image" />
    <input type="submit" name="Upload" />
    


</form> -->
<div class="bg-red-400">
<form method="POST" action="" enctype="multipart/form-data">
    @csrf
        <label for="files" ></label>
        <input type="file" name="files[]" accept=".pdf, .png, .docx, " multiple />
        <button type="submit" name="submit" class="bg-blue-800 rounded my-5">Upload</button>
    </form>

    </div>

</div>

            </div>
        </div>
    </div>
</div>
@endsection
