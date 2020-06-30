<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/logo.png" type="logo" sizes="16x16">
    <title>Pedestrian Detection</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Font CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="css/style1.css">
</head>

<body>
    <div class="text-center satu">
        <!-- Button HTML (to Trigger Modal) -->
        <!-- Notifikasi -->
        <?php 
            if(isset($_GET['pesan'])){
                if($_GET['pesan'] == "gagal"){
                    echo "Login gagal! username dan password salah!";
                }else if($_GET['pesan'] == "logout"){
                    echo "Anda telah berhasil logout";
                }else if($_GET['pesan'] == "belum_login"){
                    echo "Anda harus login untuk mengakses halaman admin";
                }
            }
        ?>
        <div id="con" class="card bg-dark text-white">
            <a href="#myModal" class="trigger-btn" data-toggle="modal">
                <img src="gambar/orang.png" weight="200" height="200" alt="gambar">
                <h1 style="color:rgb(17, 16, 16)">Pendeteksi Keramaian</h1><br>
                <h1 style="color: rgb(17, 16, 16)">KLIK LOGIN ME!!</h1>
            </a>
        </div>
    </div>
    <!-- Modal HTML -->
        <div id="myModal" class="modal fade">
            <div class="modal-dialog modal-login">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Login Account</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <form action="login/cek_login.php" method="post">
                            <div class="form-group">
                                <i class="fa fa-user"></i>
                                <input type="text" class="form-control" name="username" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <i class="fa fa-lock"></i>
                                <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-lg btn-primary btn-block" type="submit" name="login"> Masuk </button>
                            </div>
                        </form>

                    </div>
                    <div class="modal-footer">
                        <a href="register.php">Register</a>
                    </div>
                </div>
            </div>
        </div> 
    </div>
    </div>
</body>

</html>