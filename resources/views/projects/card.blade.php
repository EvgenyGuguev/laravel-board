<div class="card" style="height: 250px">
    <h3 class="text-xl mb-4 py-4 -ml-5 pl-4 border-l-4 border-blue-500">
        <a href="{{$project->path()}}">{{$project->title}}</a>
    </h3>
    <div class="text-gray-600">{{ Str::limit($project->description, 100) }}</div>
</div>

