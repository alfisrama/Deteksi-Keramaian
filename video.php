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
    <link rel="stylesheet" href="css/style5.css">



        <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Sriracha&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Arvo&family=Lobster&family=Sriracha&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Arvo&family=Lobster&family=Righteous&family=Sriracha&display=swap"
        rel="stylesheet">




    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js"
        integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous">
    </script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
        integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <?php 
            session_start();
            if($_SESSION['status']!="login"){
                header("location:login.php?pesan=belum_login");
            }
        ?>
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Pendeteksi Keramaian</h3>
            </div>
            <ul class="list-unstyled components">
                <p>Main Menu</p>
                <li>
                    <a href="index.php">About</a>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false"
                        class="dropdown-toggle">Source</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="image.php">Gambar</a>
                        </li>
                        <li class="active">
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
            <div class="sidebar-footer">
                <h7>&copy; 2020 Kelompok Image Processing</h7>
            </div>
        </nav>
        <!-- navbar -->
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

                            <li class="nav-item">
                                <a class="nav-link" href="image.php">Image Source</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link">/</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="video.php">Video Source</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link">/</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="camera.php">Camera Source</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- content -->
            <div class="row justify-content-center">
                <div class="col-md-auto">
                    <video id="vid_input" height="320" width="450" controls autoplay alt="No Video"></video>
                    <div class="d-flex justify-content-between">
                        <div class="caption">Video Sumber</div>
                        <a class="nav-link" href="video.php">
                            <i class="fas fa-sync-alt" style="color: orangered;"></i>
                        </a>
                    </div>
                    <input type="file" id="fileInput" name="file" accept="video/mp4" />
                    <div style="color: red;" id="msg" style="font-size: 10px;"></div>
                </div>
                <div class="col-md-auto">
                    <canvas id="canvas_output"></canvas>
                    <div class="caption" id="status"></div>
                </div>
            </div>
        </div>
    </div>
</body>

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
<script>
    $("#fileInput").change(function () {
        var input = document.getElementById('fileInput');
        for (var i = 0; i < input.files.length; i++) {
            var ext = input.files[i].name.substring(input.files[i].name.lastIndexOf('.') + 1).toLowerCase()
            if (ext == 'mp4') {
                $("#msg").text("Files are supported")
            } else {
                $("#msg").text("Files are NOT supported")
                document.getElementById("fileInput").value = "";
            }
        }
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').toggleClass('active');
            $(this).toggleClass('active');
        });
    });
</script>
<script async src="js/opencv.js" onload="openCvReady();"></script>
<script src="js/utils.js"></script>
<script type="text/javascript">
    let vidElement = document.getElementById('vid_input');
    let inputElement = document.getElementById('fileInput');

    inputElement.addEventListener('change', (e) => {
        vidElement.src = URL.createObjectURL(e.target.files[0]);
    }, false);

    function openCvReady() {
        cv['onRuntimeInitialized'] = () => {
            let video = document.getElementById("vid_input"); // video is the id of video tag
            let src = new cv.Mat(video.height, video.width, cv.CV_8UC4);
            let dst = new cv.Mat(video.height, video.width, cv.CV_8UC1);
            let gray = new cv.Mat();
            let cap = new cv.VideoCapture(vid_input);
            let warga = new cv.RectVector();
            let classifier = new cv.CascadeClassifier();
            let utils = new Utils('errorMessage');
            let orangCascadeFile = 'cascadG.xml'; // path to xml

            utils.createFileFromUrl(orangCascadeFile, orangCascadeFile, () => {
                classifier.load(orangCascadeFile); // in the callback, load the cascade from file 
            });

            const FPS = 30;

            function processVideo() {
                let begin = Date.now();
                cap.read(src);
                src.copyTo(dst);
                cv.cvtColor(dst, gray, cv.COLOR_RGBA2GRAY, 0);
                try {
                    classifier.detectMultiScale(gray, warga, 1.1, 3, 0);

                    console.log(warga.size());
                } catch (err) {
                    console.log(err);
                }
                for (let i = 0; i < warga.size(); ++i) {
                    if (i == 0) {
                        document.getElementById('status').innerHTML = 'Tidak Ada Orang Terdeteksi';
                    } else {
                        let orang = warga.get(i);
                        let point1 = new cv.Point(orang.x, orang.y);
                        let point2 = new cv.Point(orang.x + orang.width, orang.y + orang.height);
                        cv.rectangle(dst, point1, point2, [255, 0, 0, 255]);
                        document.getElementById('status').innerHTML = 'Jumlah Orang Terdeteksi = ' + (warga.size()-1);
                    }
                }
                cv.imshow("canvas_output", dst);
                // schedule next one.
                let delay = 1000 / FPS - (Date.now() - begin);
                setTimeout(processVideo, delay);
            }

            // schedule first one.
            setTimeout(processVideo, 0);
        };
    }
</script>

</html>
