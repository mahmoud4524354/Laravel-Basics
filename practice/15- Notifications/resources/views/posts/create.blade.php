<h1>Create New Post</h1>

<form action="{{ route('posts.store') }}" method="POST">
    @csrf

    <input type="text" name="title" placeholder="Enter The Title" required>
    <textarea name="body" placeholder="Enter The Body" required></textarea>

    <button type="submit">Submit</button>
</form>
