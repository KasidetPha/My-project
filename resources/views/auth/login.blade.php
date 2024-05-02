<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link rel="stylesheet" href="{{ asset("assets/style.css")}}">

    <link rel="stylesheet" href="{{ asset("assets/bootstrap/css/bootstrap.min.css")}}">
</head>
<body>
    <div class="container">
        <div class="card mt-5 w-50 mx-auto">
            <div class="card-body">
                <form action="{{route("checkLogin")}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" value="{{old("email")}}">
                        @error('email')
                            <div class="invalid-feedback d-block">{{ $errors->first('email')}}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control">
                        @error('password')
                            <div class="invalid-feedback d-block">{{ $errors->first('password')}}</div>
                        @enderror
                    </div>



                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>

    <script src="{{ asset("assets/bootstrap/js/bootstrap.min.js")}}"></script>
</body>
</html>