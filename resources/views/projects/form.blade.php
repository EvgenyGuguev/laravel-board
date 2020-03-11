 @csrf
<div class="mb-6">
    <label class="block text-gray-700 text-lg mb-2" for="title">
        Title
    </label>
    <input class="border rounded w-full py-2 px-3 text-gray-700" name="title" type="text" value="{{$project->title}}" required>
</div>

<div class="mb-6">
    <label class="block text-gray-700 text-lg mb-2" for="description">
        Description
    </label>
    <textarea rows="8" class="card w-full mb-4" name="description" required>{{$project->description}}</textarea>
</div>

<div class="flex items-center justify-between">
    <button class="button" type="submit">
        {{$buttonText}}
    </button>
    <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="{{$project->path()}}">
        Cancel
    </a>
</div>

@include('errors')



