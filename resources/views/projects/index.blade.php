@extends('layouts.app')

@section('content')
    <header class="flex items-center mb-3 py-4">
        <div class="flex justify-between w-full">
            <h2 class="text-gray-600">My Projects</h2>
            <a href="/projects/create" class="bg-blue-500 hover:bg-blue-700 text-white py-2 px-4 rounded">New Project</a>
        </div>
    </header>

    <main class="lg:flex lg:flex-wrap -mx-3">
        @forelse($projects as $project)
            <div class="lg:w-1/3 px-3 pb-6">
                <div class="p-5 bg-white rounded-lg shadow" style="height: 250px">
                    <h3 class="text-xl mb-4 py-4 -ml-5 pl-4 border-l-4 border-blue-500">
                        <a href="{{$project->path()}}">{{$project->title}}</a>
                    </h3>
                    <div class="text-gray-600">{{ Str::limit($project->description, 100) }}</div>
                </div>
            </div>
        @empty
            <div class="">No projects yet</div>
        @endforelse
    </main>
@endsection
