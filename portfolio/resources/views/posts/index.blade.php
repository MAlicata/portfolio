{{-- @component('components.layout') --}}
<x-layouts.app
    title="Blog" 
    meta-description="Blog meta description"
>
   
    <h3>Blog 😎</h3>

    <a href="{{ route('posts.create')}}">Create new post</a>

    @foreach($posts as $post)
    <h2>
        <a href="{{route('posts.show', $post->id)}}">{{ $post->title }}</a>
    </h2>       
    @endforeach
</x-layouts.app>
{{-- @endcomponent --}}

