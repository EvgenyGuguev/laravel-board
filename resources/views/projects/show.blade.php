@extends('layouts.app')

@section('content')
    <header class="flex items-center mb-3 py-4">
        <div class="flex justify-between w-full items-end">
            <p class="text-gray-600">
                <a href="/projects">My Projects</a> / {{$project->title}}
            </p>


            <a href="{{$project->path() . '/edit'}}" class="button">Edit Project</a>
        </div>
    </header>

    <main>
        <div class="lg:flex -mx-3">

            <div class="lg:w-3/4 px-3 mb-6">
                <div class="mb-8">
                    <h2 class="text-lg text-gray-600 mb-3">Tasks</h2>

                    @foreach($project->tasks as $task)
                        <div class="card mb-3">
                            <form method="POST" action="{{$task->path()}}">
                                @method('PATCH')
                                @csrf

                                <div class="flex">
                                    <input class="w-full {{$task->completed ? 'text-gray-500' : ''}}" name="body" value="{{$task->body}}">
                                    <input type="checkbox" name="completed" value="" onchange="this.form.submit()" {{$task->completed ? 'checked' : ''}}>
                                </div>

                            </form>
                        </div>
                    @endforeach
                    <div class="card mb-3">
                        <form action="{{$project->path() . '/tasks'}}" method="POST">
                            @csrf
                            <input class="w-full" type="text" placeholder="Add a new task..." name="body">
                        </form>
                    </div>
                </div>

                <div>
                    <h2 class="text-lg text-gray-600 mb-3">General Notes</h2>

                    <form method="POST" action="{{$project->path()}}">
                        @csrf
                        @method('PATCH')
                        <textarea rows="8" class="card w-full mb-4" placeholder="Add some notes..." name="notes">{{$project->notes}}</textarea>
                        <button type="submit" class="button">Save</button>
                    </form>

                </div>
            </div>

            <div class="lg:w-1/3 px-3 pb-6">
                @include('projects.card')
            </div>


        </div>
    </main>


@endsection
