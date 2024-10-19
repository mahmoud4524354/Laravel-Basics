
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>All posts</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<td><a class="btn btn-danger" href="{{route("posts.delete.all")}}" role="button">Delete All</a>

<td><a class="btn btn-danger" href="{{route('posts.delete.all.truncate')}}" role="button">Delete All & Trancate</a>

<td><a class="btn btn-primary" href="{{route('posts.create')}}" role="button">Creat Post</a>

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Body</th>
        <th scope="col">Pro</th>

    </tr>
    </thead>

    <tbody>
    @foreach($posts as $post)
        <tr>
            <th scope="row">{{$post->id}}</th>
            <td>{{$post->title}}</td>
            <td>{{$post->body}}</td>
            <td><a class="btn btn-primary" href="{{ route('post.edit', $post->id) }}" role="button">Edit</a></td>
            <td><a class="btn btn-danger" href="{{route("post.delete", $post->id)}}" role="button">Delete</a></td>
            @endforeach
        </tr>
    </tbody>
</table>

</body>
</html>




