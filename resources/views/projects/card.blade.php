<div class="card flex flex-col" style="height: 250px">
    <h3 class="text-xl mb-4 py-4 -ml-5 pl-4 border-l-4 border-blue-500">
        <a href="{{$project->path()}}">{{$project->title}}</a>
    </h3>
    <div class="text-gray-600 mb-4 flex-1">{{ Str::limit($project->description, 100) }}</div>

    @can('manage', $project)
        <footer>
            <form action="{{ $project->path() }}" method="POST" class="text-right">
                @csrf
                @method('DELETE')
                <button type="submit" class="button">Delete</button>
            </form>
        </footer>
    @endcan
</div>

