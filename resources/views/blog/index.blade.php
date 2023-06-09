
{{-- accessing variable from the view route or function --}}
{{-- {{ $name }}::: --}}

{{-- accessing named variable --}}
{{-- <a href={{ route("blog2") }} style="display: block">Blog2 page</a> --}}

{{-- passing route paras id to named route --}}
{{-- <a href={{ route("blogWithId", ["id" => "30"]) }} style="display: block">Blog with id</a> --}}

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ asset("css/app.css") }}>

    <title>Document</title>
</head>
<body>

    <h1>Blog</h1>
    {{-- {{ $posts->title }} --}}
    {{-- {{ dump($posts) }} --}}


    {{-- @if (count($posts) < 100 )

     <h1>
        {{ dd($posts) }}
     </h1>

    @elseif (count($posts) === 102)
     <h1>You have exactly 102 posts</h1>
        
    @else
     <h1>No posts</h1>
    @endif --}}

    {{-- unless is the negation of ig
        unless = !@if()
        
        --}}
    {{-- @unless ($posts)
        <h1>Posts have been added</h1>
    @endunless --}}
    

    {{-- array loops --}}
    @forelse ($posts as $post)
        {{-- {{ $post->title }} --}}
        {{-- {{ $loop->index }} --}}
        {{-- {{ $loop->iteration }} --}}
        {{-- {{ $loop->count }} --}}
        {{-- {{ $loop->first }} --}}
        {{-- {{ $loop->last }} --}}
        {{-- {{ $loop->depth }} --}}
        {{-- {{ $loop->parent }} --}}
    
        {{-- fullack if there is nothing in array $posts  --}}
    @empty
      No post has been set
        
    @endforelse
    
</body>
</html>
