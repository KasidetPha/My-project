@extends("layouts.master")

@section("title", "Blogs")

@section("content")

    <div class="mb-4">
        <div class="border-start border-3 border-primary ps-2"><h5><span class="text-secondary">Blogs</span></h5></div>
    </div>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show mb-4" role="alert">
            {{ session('success')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
     
    <a href="{{ route("createBlog")}}" class="btn btn-success mb-4" style="width: 15%">Create Blog</a>

    @foreach ($blogs as $blog)
        <div class="card p-2 mb-2">
            <div class="row">
                <div class="col-2">
                    <span class="text-primary">date-time</span>
                    <p>{{ $blog->created_at }}</p>
                </div>
 
                <div class="col-3">
                    <span class="text-primary">section</span>
                    <p>{{ $blog->section}}</p>
                </div>

                <div class="col-7">
                    <span class="text-primary">Detail</span>
                    <p>{{ $blog->detail}}</p>
                </div>
            </div>

            <div class="my-1">
                <div class="row">
                    <div class="col-6">
                        <a href="{{ route("editBlog", $blog->id)}}" class="btn btn-warning float-left" style="width:20%">Edit</a>
                        <a href="{{ route("destroyBlog",$blog->id)}}" class="btn btn-danger float-left" style="width:20%">Delete</a>
                    </div>
                    <div class="col-6">
                        <small class="float-end">Creator By {{$user->name}}</small>
                    </div>
                </div>
            </div>
        </div>

        @endforeach
        <div class="mt-3">
            {{ $blogs->links()}}
        </div>
@endsection