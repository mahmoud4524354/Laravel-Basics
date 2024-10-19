@extends("layouts.nav")

{{-- بيشير لكلمه @yield('title') --}}
@section("title")
posts
{{-- @endsection --}}
{{-- وممكن تكتب  stop بدلا من endsection --}}
@stop

@section("cont")
<h1>posts</h1>
@endsection

@section("sidebar")
@parent
,,,,,,   PPPPPOST
@endsection