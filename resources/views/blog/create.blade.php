@extends("layouts.master")

@section("title", "Create")

@section("content")
    <div class="mb-4">
        <h5><span class="text-primary">|</span> <span class="text-secondary">Blogs Create</span></h5>
    </div>
     
    <div class="card p-2">
        <form action="{{route($route, ['id', $blog->id])}}" method="POST">
            @csrf
            @method("$method")
            <div class="mb-2">
                <span for="" class="text-primary mb-3">Section :</span>
                <input type="text" class="form-control mt-2" name="section" placeholder="section" style="" value="{{$blog->section}}">
            </div>

            <div class="mb-2">
                <span for="" class="text-primary mb-3">Description :</span>
                <textarea cols="30" rows="4" class="form-control mt-2" name="description" placeholder="description" style="">{{$blog->detail}}</textarea>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-success" style="width: 15%;">Submit</button>
                <a href="{{ route("indexBlog")}}" class="btn btn-danger" style="width: 15%;">Back</a>
            </div>
        </form>
    </div>
    
@endsection