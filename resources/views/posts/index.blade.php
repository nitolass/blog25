<x-layout meta-title="Blog"
          meta-description="Descripción de la página de Blog">




    <h1>Blog</h1>
    <a href="{{route ('posts.create')}}">Create New Post</a>
    @foreach($posts as $post)
        <h2><a href="{{ route('posts.show', $post) }}">{{ $post->title }}</a></h2>    @endforeach
</x-layout>
