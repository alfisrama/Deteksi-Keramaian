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
        <?php 
            session_start();
            if($_SESSION['status']!="login"){
                header("location:login.php?pesan=belum_login");
            }
        ?>
        <!-- Sidebar -->
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
                        <li class="active">
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
                            <li class="nav-item active">
                                <a class="nav-link" href="image.php">Image Source</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link">/</a>
                            </li>
                            <li class="nav-item">
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
                    <img id="imageSrc" height="320" width="450" alt="No Image" />
                    <div class="caption">Gambar Sumber</div>
                    <div class="d-flex justify-content-between">
                        <input type="file" id="file" name="file" accept="image/*">
                        <div style="color: red;" id="msg" style="font-size: 10px;"></div>
                        <a class="nav-link" href="image.php">
                            <i class="fas fa-sync-alt" style="color: orangered;"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-auto">
                    <p><canvas id="canvas"></canvas></p>
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
    $("#file").change(function () {
        var input = document.getElementById('file');
        for (var i = 0; i < input.files.length; i++) {
            var ext = input.files[i].name.substring(input.files[i].name.lastIndexOf('.') + 1).toLowerCase()
            if ((ext == 'jpg' || ext == 'jpeg' || ext == 'bmp' || ext == 'png') {
                $("#msg").text("Files are supported")
            } else {
                $("#msg").text("Files are NOT supported")
                document.getElementById("file").value = "";
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
<script src="js/objectdetect.js"></script>
<script src="js/objectdetect.fullbody.js"></script>
<script>
    let imgElement = document.getElementById('imageSrc');
    let inputElement = document.getElementById('
                                               
                                               
                                               
                                               
                                               ');
    inputElement.addEventListener('change', (e) => {
        imgElement.src = URL.createObjectURL(e.target.files[0]);
    }, false);
    window.onload = function () {
        var canvas = document.getElementById('canvas');
        var context = canvas.getContext('2d');
        var size = 250;
        var detector;
        var classifier = objectdetect.fullbody;

        function detectBody(canvas) {
            // Detect faces in the image:
            var rects = detector.detect(canvas);
            // Draw rectangles around detected faces:
            for (var i = 0; i < rects.length; ++i) {
                if (i == 0) {
                    document.getElementById('status').innerHTML = 'Tidak Ada Orang Terdeteksi';
                } else {
                    var coord = rects[i];
                    context.beginPath();
                    context.lineWidth = '' + coord[4] * .5;
                    context.strokeStyle = 'rgba(255, 0, 0, 0.75)';
                    context.rect(coord[0], coord[1], coord[2], coord[3]);
                    context.stroke();
                    document.getElementById('status').innerHTML = 'Jumlah Orang Terdeteksi = ' + (rects.length-1);
                }
            }
            
        }

        function loadImage(src) {
            image = new Image();
            image.onload = function () {
                canvas.width = ~~(450);
                canvas.height = ~~(320);
                canvas.getContext('2d').drawImage(image, 1.1, 3, canvas.width, canvas.height);
                detector = new objectdetect.detector(canvas.width, canvas.height, 1.3, classifier);
                detectBody(canvas);
            }

            image.src = src;
        }

        function handleFileSelect(e) {
            var file = e.target.files[0];
            var reader = new FileReader();

            reader.onload = function (e) {
                loadImage(e.target.result);
            };
            reader.readAsDataURL(file);
        }

        function handleClassifierSelect(e) {
            classifier = objectdetect[e.target.fullbody];
            detector = new objectdetect.detector(canvas.width, canvas.height, 1.1, 3, 0,  classifier);
            canvas.getContext('2d').drawImage(image, 1.1, 3, canvas.width, canvas.height);
            detectBody(canvas);
        }
        document.getElementById('file').addEventListener('change', handleFileSelect, false);
    }
</script>

</html>
