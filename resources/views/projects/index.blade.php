@extends('layouts.app')

@section('content')
    <div class="flex items-center mb-3">

        <a href="/projects/create">Create New Project</a>
    </div>

    <div class="flex">
        @forelse($projects as $project)
            <div class="p-5 bg-white mr-4 rounded shadow w-1/3" style="height: 200px">
                <h3 class="text-xl mb-4 py-4">{{$project->title}}</h3>
                <div class="text-gray-600">{{ Str::limit($project->description, 100) }}</div>
            </div>
        @empty
            <div class="">No projects yet</div>
        @endforelse
    </div>
@endsection
