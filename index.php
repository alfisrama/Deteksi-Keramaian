<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="icon" href="img/logo.png" type="logo" sizes="16x16">
    <title>Pedestrian Detection</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
        integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- CSSS -->
    <link rel="stylesheet" href="css/style5.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Sriracha&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arvo&family=Lobster&family=Sriracha&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Arvo&family=Lobster&family=Righteous&family=Sriracha&display=swap"
        rel="stylesheet">
    <!-- akhor fonts -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
        integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <!-- Notofikasi -->
        <?php 
            session_start();
            if($_SESSION['status']!="login"){
                header("location:../improc/login.php?pesan=belum_login");
            }
        ?>
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Pendeteksi Keramaian</h3>
            </div>

            <ul class="list-unstyled components">
                <p>Main Menu</p>
                <li class="active">
                    <a href="index.php">About</a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">Source</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="image.php">Gambar</a>
                        </li>
                        <li>
                            <a href="video.php">Video</a>
                        </li>
                        <li>
                            <a href="camera.php">Kamera</a>
                        </li>
                    </ul>
                </li>
                <li class="bg-danger">
                    <center><a href="login/logout.php">Logout</a></center>
                </li>
            </ul>
            <div class="sidebar-footer" id="tulis">
                <h7>&copy; 2020 Kelompok Image Processing</h7>
            </div>
        </nav>

        <!-- Page Content Holder -->
        <div id="content">
            <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.php">About</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <h1>Tentang Aplikasi</h1>
            <p>Pertumbuhan masyarakat semakin meningkat seiring waktu. Pertumbuhan masyarakat juga berdampak pada bidang
                seperti ekonomi dan keamanan. Sehingga informasi tentang keramaian di suatu lokasi dapat di gunakan oleh
                pelaku bisinis untuk menentukan lokasi pembukaan usaha baru dan pada bidang keamaan data dapat di
                gunakan untuk membantu memberikan keputusan lokasi mana yang butuh peningkatan keamanan. Dengan adanya
                web ini diharapakan dapat membantu masyarakat mengetahui informasi lokasi keramaian manusia yang
                dilakukan secara real time.</p>

            <div class="line"></div>
            <h1>Our Team</h1><br>
            <ul class="list-unstyled components">
                <li>
                    <div class="profile-desc">
                        <figure>
                            <img src="img/alfis.jpg" class="img-responsive">
                        </figure>
                        <div>
                            <h3>MUHAMMAD ALFIS RAMADHAN</h3>
                            <p>4817070941</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="profile-desc">
                        <figure>
                            <img src="img/edon.jpeg" class="img-responsive">
                        </figure>
                        <div>
                            <h3>EDON SIMON HARIANJA</h3>
                            <p>4817071394</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="profile-desc">
                        <figure>
                            <img src="img/ario.png" class="img-responsive">
                        </figure>
                        <div>
                            <h3>ARIO SUTRISNO</h3>
                            <p>4817070412</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="profile-desc">
                        <figure>
                            <img src="img/cindy.jpeg" class="img-responsive">
                        </figure>
                        <div>
                            <h3>CINDI WIDARINI</h3>
                            <p>4817070456</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
        integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous">
    </script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
        integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous">
    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>
</body>

</html>