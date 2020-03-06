@extends('layouts.app')

@section('content')
    <div class="w-1/2 mx-auto bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <form method="POST" action="/projects">
            <h1 class="text-2xl text-center mb-10">Create Your Project</h1>
            @include('projects.form', [
                    'project' => new \App\Project(),
                    'buttonText' => 'Create Project'

                    ])
        </form>
    </div>


{{--    <form action="/projects" method="POST" class="w-1/2 mx-auto bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">--}}
{{--        @csrf--}}

{{--        <h1 class="text-2xl text-center mb-10">Create a Project</h1>--}}

{{--        <div class="mb-6">--}}
{{--            <label class="block text-gray-700 text-lg mb-2" for="">--}}
{{--                Title--}}
{{--            </label>--}}
{{--            <input type="text" class="border rounded w-full py-2 px-3 text-gray-700" name="title" placeholder="title">--}}

{{--        </div>--}}

{{--        <div class="mb-6">--}}
{{--            <label class="block text-gray-700 text-lg mb-2" for="description">--}}
{{--                Description--}}
{{--            </label>--}}
{{--            <textarea rows="8" class="card w-full mb-4" name="description" placeholder="Your description"></textarea>--}}
{{--        </div>--}}

{{--        <div class="flex items-center justify-between">--}}
{{--            <button class="button" type="submit">--}}
{{--                Create--}}
{{--            </button>--}}
{{--            <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="/projects">--}}
{{--                Cancel--}}
{{--            </a>--}}
{{--        </div>--}}

{{--    </form>--}}
@endsection


