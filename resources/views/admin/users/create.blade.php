@extends('layouts.admin')
@section('content')
    <form action="/admin/users/new" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Name">
        </div>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" id="email" name="email"  placeholder="name@gmail.com">
        </div>
        <div class="form-group">
            <label for="text">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
