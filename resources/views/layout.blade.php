<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/style.css')}}"> --}}
    {{-- <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/stile.css')}}"> --}}
    <link rel="stylesheet" type="text/css" href="{{asset('/assets/css/main.css')}}">
    <title>Kiprah Alumni</title>
</head>
<body>
    @if (Auth::check())
    <nav class="navbar navbar-expand-lg bg-light">
        <a class="navbar-brand" href="#">
            
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto navbar-right-top">
                <li class="nav-item dropdown nav-user">
                    <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="https://i.pinimg.com/736x/17/f0/10/17f01070dcf9691576127f8c57e07130.jpg" alt="" class="rounded-circle" width="35"></a>
                    <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                    {{-- <a class="dropdown-item" href="/profile">
                            <b>Profile</b>
                        </a>
                        <a class="dropdown-item" href="/todo/users">
                            <b>User Data</b>
                        </a> --}}
                        <a class="dropdown-item" href="/dashboard/pembayaran">
                            <i class="fa-solid fa-money-bill mr-2"></i>Pembayaran
                        </a>
                        
                        <a class="dropdown-item" href="/logout">
                            <i class="fa-sharp fa-solid fa-arrow-right mr-2"></i><b>Logout</b>
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    @endif
    
    {{-- konten tambahan di berbagai halaman --}}
    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    <script src="{{asset('assets/js/index.js')}}"></script>
</body>
</html>