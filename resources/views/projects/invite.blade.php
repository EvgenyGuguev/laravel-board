<div class="card flex flex-col mt-3">
    <h3 class="text-xl mb-4 py-4 -ml-5 pl-4 border-l-4 border-blue-500">
        Invite a user
    </h3>

    <form action="{{ $project->path() . '/invitations'}}" method="POST">
        @csrf
        <div class="mb-3">
            <input type="email" name="email" class="border border-gray-500 rounded w-full py-1 px-3" placeholder="email address">
        </div>

        <button type="submit" class="button">Invite</button>

    </form>
    @include('errors', ['bag' => 'invitations'])

</div>
