@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="text-gray-600 mb-4">Dashboard</h2>
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1 class="mb-4">You are logged in!</h1>

                        <a href="/projects" class="button" type="submit">My Projects</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
