@extends("layouts.master")

@section("title", "Addname")

@section("content")
    <div class="mb-4">
        <h5><div class="border-start border-3 border-primary ps-2"><span class="text-secondary">Add names</span></div></h5>
    </div>

    <div class="card p-2">
        <form action="{{route("storeAddname")}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-5">
                    <span class="text-primary">First Name</span>
                    <input type="text" name="firstname" class="form-control mt-2">
                </div>
        
                <div class="col-5">
                    <span class="text-primary">Last Name</span>
                    <input type="text" name="lastname" class="form-control mt-2" style="width:100%">
                </div>

                <div class="col-2 d-flex align-items-end">
                    <button type="submit" class="btn btn-primary ml-2" style="width:100%">Add</button>
                </div>
            </div>
        </form>

        <table class="table mt-2">
            <thead>
                <tr>
                    <th style="width: 10%">#</th>
                    <th style="width: 30%">FirstName</th>
                    <th style="width: 30%">LastName</th>
                    <th style="width: 30%"></th>
                </tr>

                @foreach ($addnames as $addname)
                    <tr>
                        <td>{{$nums++}}</td>
                        <td>{{$addname->firstname}}</td>
                        <td>{{$addname->lastname}}</td>
                        
                        <td class="">
                            <a href="{{route("editAddname", $addname->id)}}" class="btn btn-warning text-white" style="width:30%">Edit</a>
                            <a href="{{route('destroyAddname',$addname->id)}}" class="btn btn-danger text-white" style="width:30%">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </thead>
        </table>

        {{ $addnames->links() }}
    </div>
    
    
@endsection

{{-- @extends("layouts.app")

@section("content")

@endsection --}}