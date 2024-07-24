@extends("blog.main")
@push("style")
    <style>
        .content{
            background-color: aqua
        }
    </style>
@endpush
@section("content")
<div class="content">
    <h1>About Page</h1>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium officia, deleniti harum vitae sunt ullam earum ipsum voluptates reiciendis pariatur. Quia eum numquam debitis nobis, vel consectetur! Fugiat, libero repudiandae!</p>
<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam consequatur voluptate reprehenderit deleniti a labore perspiciatis dolorem, velit mollitia illo cumque voluptatem omnis. Iste maxime quasi ipsum magnam eius. Temporibus.</p>

</div>
@endsection

{{-- @push("script")
<script>
    alert("Hello About Page")
</script>
@endpush --}}
