<h1>
    show all posts soft delete
</h1>

<table>
    <th>#</th>
    <th>id</th>
    <th>title</th>
    <th>body</th>
    @foreach($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->body}}</td>
            <td>
                <a href="{{route("posts.restore",$post->id)}}">Restore</a>
                {{--                <a href="">Delete</a>--}}
                <form action="{{route("posts.delete",$post->id)}}" method="get">
                    @method("DELETE")
                    @csrf
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach

</table>



