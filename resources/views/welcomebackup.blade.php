<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Landing Page</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/one-page-wonder.min.css')}}" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">SARPRAS</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    @if (Route::has('login'))
                            @auth
                                <li class="nav-item">
                                    <a class="nav-link btn btn-primary" href="{{ url('home') }}">Home</a>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link btn btn-primary" href="{{ route('login') }}">Log In</a>
                                </li>
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link btn btn-primary ml-3" href="{{ route('register') }}">Register</a>
                                        </li>
                                    @endif
                            @endauth
                        </div>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <header class="masthead text-center text-white">
        <div class="masthead-content">
            <div class="container">
                <h1 class="masthead-heading mb-0">SEMINARIAN</h1><br>
                <h2 class="masthead-subheading mb-0">Will Provide The Best Service</h2>
                <a href="#" class="btn btn-primary btn-xl rounded-pill mt-5">Learn More</a>
            </div>
        </div>
        <div class="bg-circle-1 bg-circle"></div>
        <div class="bg-circle-2 bg-circle"></div>
        <div class="bg-circle-3 bg-circle"></div>
        <div class="bg-circle-4 bg-circle"></div>
    </header>

    <section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="p-5">
                        <img class="img-fluid rounded-circle" src="{{asset('image/admin.png')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="p-5">
                        <h2 class="display-4">Admin</h2>
                        <p class="text-justify">Pada Aplikasi ini admin dapat mengelola peminjaman barang maupun pengelolaan kunci ruangan. Untuk pengelolaannya sendiri dibilang mudah karena admin hanya menunggu pengambilan barang dan kunci saja setelah selesai dipinjam barang akan dikembalikan oleh peminjam disini admin dapat memencet tombol dikembalikan dan status peminjaman pun akan diupdate menjadi dikembalikan</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="p-5">
                        <img class="img-fluid rounded-circle" src="{{asset('image/siswa.png')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="p-5">
                        <h2 class="display-4">Siswa/i</h2>
                        <p class="text-justify">Pada Aplikasi ini siswa/i dapat meminjam barang ataupun kunci dengan sangat mudah tanpa harus menunggu siswa/i lain mengisi form peminjaman di sarpras. Di aplikasi ini siswa/i dapat mengisi form tanpa harus mengantri, setelah mengisi form siswa/i dapat mengambil barang atau kunci  yang ingin dipinjam langsung ke sarpras.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-2">
                    <div class="p-5">
                        <img class="img-fluid rounded-circle" src="{{asset('image/guru.png')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="p-5">
                        <h2 class="display-4">Guru</h2>
                        <p class="text-justify">Pada Aplikasi ini guru dapat meminjam barang ataupun kunci dengan sangat mudah tanpa harus menunggu guru lain mengisi form peminjaman di sarpras. Di aplikasi ini guru dapat mengisi form tanpa harus mengantri, setelah mengisi form guru dapat mengambil barang atau kunci  yang ingin dipinjam langsung ke sarpras.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <footer class="py-3 bg-black">
        <div class="container">
            <p class="m-0 text-center text-white small">Copyright &copy; PPKDB 2020</p>
        </div>
        <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>
