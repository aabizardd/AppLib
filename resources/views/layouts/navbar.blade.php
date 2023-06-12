<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIMULASI TATA KELOLA BUKU</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">

    @yield('addStyle')

</head>

<body style="background-color: #eaeaea">
    <header class="header">
        <img class="img" src="{{ asset('/logo/logo.png') }}">
        <h1 class="h1">TATA KELOLA BUKU PERPUSTAKAAN</h1>
    </header>

    <nav>
        <a href="{{ url('/buku') }}">Buku</a>
        {{-- <a href="{{ url('/detailbuku') }}">Detail Buku</a> --}}
        <a href="{{ url('/petugas') }}">Petugas</a>

        <a href="{{ url('/logout') }}">
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button class="buttonutama" href="route('logout')"
                    onclick="event.preventDefault();
                              this.closest('form').submit();">
                    {{ __('Log Out') }}
                </button>
            </form>
        </a>


    </nav>

    <div class="container-fluid">
        @yield('konten')
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    @yield('addScript')

</body>

</html>
