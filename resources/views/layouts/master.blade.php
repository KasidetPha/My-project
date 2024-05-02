<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title")</title>

    {{-- css --}}
    <link rel="stylesheet" href="{{ asset("assets/style.css")}}">

    {{-- bootstarp --}}
    <link rel="stylesheet" href="{{ asset("assets/bootstrap/css/bootstrap.min.css")}}">

    {{-- font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body class="body">
    <div class="container">
    <header class="">
        <nav class="mb-3">
            <button class="btn-hamburger">
                <i class="fas fa-bars"></i>
            </button>
            <h2>My Webpage</h2>
            <ul>
                <li><a href="{{ route("indexAddname")}}">Addnames</a></li>
                <li><a href="{{ route("indexBlog")}}">Blogs</a></li>
                <li><a href="#">Todolists</a></li>
                <li><a href="#">About Me</a></li>
                <li><a href="{{ route("logout")}}" class="btn-signout">Logout</a></li>
            </ul>
        </nav>
    </header>

    <section>
        @yield("content")
    </section>
    </div>

    <script src="{{ asset("assets/bootstrap/js/bootstrap.min.js")}}"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $(".btn-hamburger").on("click", function() {
                $("nav ul").toggleClass("nav-active")
            })
        })
    </script>
</body>
</html>