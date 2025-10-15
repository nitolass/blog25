<x-layout meta-title="Create new post" meta-description="Form to create a new Post">
    <h1>{{__("Create new Post")}}</h1>



    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        @include('posts.form_fields')

        <br />
        <button type="submit">{{ __('Send') }}</button>
        <br />
    </form>
    <a href="{{ route('posts.index') }}">{{ __('Back') }}</a>
</x-layout>

