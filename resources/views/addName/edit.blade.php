@extends("layouts.master")

@section("title", "EditUser")

@section("content")
    <div class="mb-4">
        <h5><span class="text-primary">|</span> <span class="text-secondary">Users</span></h5>
    </div>

    <div class="card p-2">
        <form action="{{route("updateAddname", $addname->id)}}" method="POST">
            @csrf
            @method("PUT")
            <div class="row">
                <div class="col-5">
                    <span class="text-primary">First Name</span>
                    <input type="text" name="firstname" value="{{$addname->firstname}}" class="form-control mt-2">
                </div>
        
                <div class="col-5">
                    <span class="text-primary">Last Name</span>
                    <input type="text" name="lastname" value="{{$addname->lastname}}" class="form-control mt-2" style="width:100%">
                </div>

                <div class="col-2 d-flex align-items-end">
                    <button type="submit" class="btn btn-warning ml-2" style="width:100%">Change</button>
                </div>
            </div>
        </form>
    </div>
    
    
@endsection