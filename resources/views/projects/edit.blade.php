@extends('layouts.app')

@section('content')
    <div class="w-1/2 mx-auto bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <form method="POST" action="{{$project->path()}}">
            @method('PATCH')

            <h1 class="text-2xl text-center mb-10">Edit Your Project</h1>
            @include('projects.form', [
                    'buttonText' => 'Update Project'

                    ])
        </form>
    </div>
@endsection


