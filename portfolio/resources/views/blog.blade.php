{{-- @component('components.layout') --}}
<x-layouts.app
    title="Blog" 
    meta-description="Blog meta description"
>
    <h3>Blog 😎</h3>
    @foreach($posts as $post)
    <h2>{{ $post->title }}</h2>       
    @endforeach
</x-layouts.app>
{{-- @endcomponent --}}

