<h1>
    Create New Post
</h1>

<form action="{{route("posts.insert")}}" method="post">

    @csrf

    <input type="text" name="title" placeholder="Enter Your Title"><br>
    <input type="text" name="body" placeholder="Enter Body"><br>
    <button type="submit">Submit</button>
</form>
