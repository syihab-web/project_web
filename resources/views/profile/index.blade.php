<style>
    #img{
        width: 360px;
        border-radius: 10%;
        padding-right: 10px;
    }
    .wrapper {
    text-align : center;
}
.image, .form {
    display: inline-block;
    vertical-align: top;
}
</style>

@extends('layouts.app')

@section('title', 'Profile')

@section('content')
<br><br>

<div class="container">
    @if(count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Perhatian</strong>
        <br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>
                {{ $error }}
            </li>
            @endforeach
        </ul>
    </div>
@endif
    <form action="/profile/{{ $user->id }}" method="POST" enctype="multipart/form-data">
        @method('patch')
        @csrf
        <div class="wrapper">
        <div class="image">
            <img id="img" src="{{ asset('assets/Users/'.$user->image) }}">
        </div>
        
        <div class="form">
            <div class="form-group">
                <label for="exampleInputEmail1">Image</label>
                <input name="image" value="{{ $user->image }}" type="file" class="form-control" id="exampleInputEmail1">
            </div>
            <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
                <input name="name" value="{{ $user->name }}" type="text" class="form-control" id="exampleInputEmail1" required>
            </div>
            <div class="form-group">
            <label for="exampleInputPassword1">Email</label>
            <input name="email" type="text" value="{{ $user->email }}" class="form-control" id="exampleInputPassword1" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword2">Password</label>
            <input name="password" type="password" minlength="8" placeholder="Click to Edit Password" class="form-control" id="exampleInputPassword2">
            </div>

            <button type="submit" class="btn btn-primary">Edit</button>
            <a href="/pandemic" class="btn btn-danger">Back to Home</a>
        </div>
        </form>
        </div>
</div>
<br><br><br>
@endsection