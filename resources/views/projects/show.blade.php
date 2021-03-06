@extends('layouts.app')

@section('content')
    <header class="flex items-center mb-3 py-4">
        <div class="flex justify-between w-full items-end">
            <p class="text-gray-600">
                <a href="/projects">My Projects</a> / {{$project->title}}
            </p>

            <div class="flex items-center">
                @foreach($project->members as $member)
                    <img src="{{ gravatar_url($member->email) }}" alt="{{ $member->name }}'s avatar" class="rounded-full w-8 mr-2">
                @endforeach

                    <img src="{{ gravatar_url($project->owner->email) }}" alt="{{ $project->owner->name }}'s avatar" class="rounded-full w-8 mr-2">

                <a href="{{$project->path() . '/edit'}}" class="button ml-4">Edit Project</a>
            </div>

        </div>
    </header>

    <main>
        <div class="lg:flex -mx-3">

            <div class="lg:w-3/4 px-3 mb-6">
                <div class="mb-8">
                    <h2 class="text-lg text-gray-600 mb-1">Tasks</h2>

                    @foreach($project->tasks as $task)
                        <div class="card mb-3">
                            <form method="POST" action="{{$task->path()}}">
                                @method('PATCH')
                                @csrf

                                <div class="flex items-center">
                                    <input name="body" value="{{ $task->body }}" class="w-full {{ $task->completed ? 'text-gray-500' : '' }}" >
                                    <input name="completed" type="checkbox" onChange="this.form.submit()" {{ $task->completed ? 'checked' : '' }}>
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

                    @include('errors')

                </div>
            </div>

            <div class="lg:w-1/4 px-3 lg:py-8">
                @include('projects.card')
                @include('projects.activity.card')

                @can('manage', $project)
                    @include('projects.invite')
                @endcan
            </div>


        </div>
    </main>


@endsection
