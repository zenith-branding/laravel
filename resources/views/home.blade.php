@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
    <h1 class="card-header mt-5 text-center">DB Users</h1>
    <table class="table mt-5">
        <thead>
            <tr class="justify-content-center">
                <th class="align-middle" scope="col">#</th>
                <th class="align-middle" scope="col">Name</th>
                <th class="align-middle" scope="col">Email</th>
                <th class="align-middle" scope="col">Mobile</th>
                <th class="align-middle" scope="col">Last LogIn</th>
                <th class="align-middle" scope="col">Role</th>
            </tr>
        </thead>




        <tbody>

            @foreach($users as $key=>$user)
            <tr>
                <th scope="row">{{ ++$key }}</th>
                <td>{{ $user->name }}</td>
                <td> {{ $user->email }}</td>
                <td>Jacob</td>
                <td>Thornton</td>
                <td> {{ $user }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
