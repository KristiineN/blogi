@extends('layouts.admin')
@section('content')
    <table class="table table-striped">
        <tbody>
        <tr>
            <th scope="row">Id</th>
            <td>{{$user->id}}</td>
        </tr>
        <tr>
            <th scope="row">Name</th>
            <td>{{$user->name}}</td>
        </tr>
        <tr>
            <th scope="row">E-mail</th>
            <td>{!! $user->email !!}</td>
        </tr>
        </tbody>
    </table>
@endsection
