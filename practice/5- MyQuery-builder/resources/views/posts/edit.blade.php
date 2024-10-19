<h1>
    Edit Post
</h1>

<form action="{{ route('post.update', $post->id) }}" method="post">

    @csrf

    <input type="text" name="title" value="{{$post->title}}"><br>
    <input type="text" name="body" value="{{$post->body}}"><br>
    <button type="submit">Update</button>
</form>
