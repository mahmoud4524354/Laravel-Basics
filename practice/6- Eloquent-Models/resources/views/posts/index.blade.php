<h1>
    show all posts
</h1>

<table>
    <th>id</th>
    <th>title</th>
    <th>body</th>
    <th>#</th>
    @foreach($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->body}}</td>
            <td>
                <a href="{{route("posts.edit",$post->id)}}">Edit</a>
{{--                <a href="">Delete</a>--}}
                <form action="{{route("posts.destroy",$post->id)}}" method="post">
                    @method("DELETE")
                    @csrf
                    <button type="submit">Soft Delete</button>
                </form>
            </td>
        </tr>
    @endforeach

</table>



