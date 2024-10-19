<!-- /resources/views/post/create.blade.php -->

<h1> Create New Post </h1>

{{--@if ($errors->any())--}}
{{--    <div class="alert alert-danger">--}}
{{--        <ul>--}}
{{--            @foreach ($errors->all() as $error)--}}
{{--                <li>{{ $error }}</li>--}}
{{--            @endforeach--}}
{{--        </ul>--}}
{{--    </div>--}}
{{--@endif--}}

<!-- Create Post Form -->



{{--عنوان الroute اللي هتروح عليه او اسمه --}}
{{--<form action="{{url("post/insert")}}" method="post">--}}
<form action="{{route("posts.store")}}" method="post">

    @csrf
    <!-- Equivalent to... -->
    {{--    <input type="hidden" name="_token" value="{{ csrf_token() }}" />--}}


{{--    <input type="text" name="title" required placeholder="Enter Your Title"><br>--}}

    <input id="title" type="text" name="title"placeholder="Enter title" value="{{old("title")}}" class="@error('title') is-invalid @enderror"><br>
    @error('title')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <input id="body" type="text" name="body" placeholder="Enter body"  value="{{old("body")}}" class="@error('body') is-invalid @enderror"><br>
    @error('body')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

{{--    <input type="text" name="body" required placeholder="Enter Body"><br>--}}
    <button type="submit">Submit</button>
</form>
