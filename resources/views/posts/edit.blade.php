<x-layout meta-title="Create new post" meta-description="Form to create a new Post">
    <h1>{{ __('Edit Post') }}</h1>



    <form method="POST" action="{{ route('posts.update', $post) }}">
        @csrf
        @method('PATCH')
        @include('posts.form_fields')

        <br />
        <button type="submit">{{ __('Send') }}</button>
        <br />
    </form>
    <a href="{{ route('posts.index') }}">{{ __('Back') }}</a>
</x-layout>

