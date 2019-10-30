@extends('layouts.admin')
@section('content')
    <form action="/admin/users/edit/{{$user->id}}" method="user">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input
                type="text"
                class="form-control"
                name="name"
                id="name"
                placeholder="Name"
                value="{{$user->name}}"
            >
        </div>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input
                type="email"
                class="form-control"
                id="email"
                name="email"
                value="{{$user->email}}"
                placeholder="name@gmail.com">
        </div>

        <div class="form-group">
            <label for="text">Password</label>
            <input type="password"
                   class="form-control"
                   id="password"
                   value=""
                   name="password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
