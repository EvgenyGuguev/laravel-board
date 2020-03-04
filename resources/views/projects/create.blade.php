@extends('layouts.app')

@section('content')
{{--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.8.0/css/bulma.min.css">--}}


    <form action="/projects" method="POST">
        @csrf

        <h1 class="heading is-1">Create a Project</h1>

            <div class="field">
                <label class="label" for="">Title</label>

                <div class="control">
                    <input type="text" class="input" name="title" placeholder="title">
                </div>
            </div>

            <div class="field">
                <label class="label" for="">Description</label>

                <div class="control">
                    <textarea name="description" class="textarea" ></textarea>
                </div>
            </div>

            <div class="field">
                <div class="control">
                    <button type="submit" class="button is-link">Create Project</button>
                    <a href="/projects">Cancel</a>
                </div>
            </div>

    </form>
@endsection


