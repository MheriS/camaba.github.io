<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <title>Starter Template · Bootstrap</title>
    
    <!--Template based on URL below-->
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Place your stylesheet here-->
    <link href="/css/stylesheet.css" rel="stylesheet" type="text/css">
    
    <!-- Digunakan untuk login-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script><script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
    <style type="text/css">
        section legend, h1{
            font-family: 'Bangers', cursive;
            font-size: 40px;
        }
        .required:after{
            content: "*";
            color: red;
        }
    </style>
    <style>

.modal-login {		
	color: #636363;
	width: 350px;
}
.modal-login .modal-content {
	padding: 20px;
	border-radius: 5px;
	border: none;
}
.modal-login .modal-header {
	border-bottom: none;   
	position: relative;
	justify-content: center;
}
.modal-login h4 {
	text-align: center;
	font-size: 26px;
	margin: 30px 0 -15px;
}
.modal-login .form-control:focus {
	border-color: #70c5c0;
}
.modal-login .form-control, .modal-login .btn {
	min-height: 40px;
	border-radius: 3px; 
}
.modal-login .close {
	position: absolute;
	top: -5px;
	right: -5px;
}	
.modal-login .modal-footer {
	background: #ecf0f1;
	border-color: #dee4e7;
	text-align: center;
	justify-content: center;
	margin: 0 -20px -20px;
	border-radius: 5px;
	font-size: 13px;
}
.modal-login .modal-footer a {
	color: #999;
}		
.modal-login .avatar {
	position: absolute;
	margin: 0 auto;
	left: 0;
	right: 0;
	top: -70px;
	width: 95px;
	height: 95px;
	border-radius: 50%;
	z-index: 9;
	background: #60c7c1;
	padding: 15px;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.1);
}
.modal-login .avatar img {
	width: 100%;
}
.modal-login.modal-dialog {
	margin-top: 80px;
}
.modal-login .btn, .modal-login .btn:active {
	color: #fff;
	border-radius: 4px;
	background: #60c7c1 !important;
	text-decoration: none;
	transition: all 0.4s;
	line-height: normal;
	border: none;
}
.modal-login .btn:hover, .modal-login .btn:focus {
	background: #45aba6 !important;
	outline: none;
}
.trigger-btn {
	display: inline-block;
	margin: 100px auto;
}
</style>

<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">UIN-Malang</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="jadwal.php">Jadwal PMB</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="alur.php">Alur PMB</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="persyaratan.php">Persyaratan PMB</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="countdowndaftar.php">Daftar PMB</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="pembayaran.php">Pembayaran PMB <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="cekkelulusan.php">Pengumuman Kelulusan</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="#myModalPeserta" data-toggle="modal">Login Peserta</a>
                    <a class="dropdown-item" href="#myModalPanitia" data-toggle="modal">Login Panitia</a>
                    <a class="dropdown-item" href="#myModalAdmin" data-toggle="modal">Login Admin</a>
                </div>
            </li>
        </ul>
    </div>
</nav>

    <main role="main" class="container">

        <div class="container text-center mt-5 pt-5">
            <marquee direction="down" width="600px" bgcolor="crimson" scrolldelay="500">Pembayaran dapat dilakukan melalui pengiriman ke no. Rekening 8787211114</marquee><br>
            <marquee direction="left" bgcolor="DarkCyan" width="600px">Sebelumnya anda harus melakukan pengecekan nominal biaya pendaftaran anda</marquee><br>
            <fieldset>
            <legend><h1>Form Check Biaya Pendaftaran</h1></legend>
            <form class="form-horizontal" action="pembayaran.php" method="post">
            <div class="form-group">
                    <label class="control-label col-sm-2" for="jurusan" style="font-family: 'Handlee', cursive;"><strong>Jurusan:</strong></label>
                    <div class="col-sm-10">
                    <select class="selectpicker" data-style="btn-info" data-live-search="true" name="jurusan" style="width:805px; border:1px dotted #c6c9c6; border-radius:4px; -moz-border-radius:4px; background:#f6fff8; height:30px; font-family: 'Handlee', cursive; margin-left:120px;">
                <optgroup label="Fakultas Ilmu Tarbiyah dan Keguruan">
                    <option>Pendidikan Agama Islam</option>
                    <option>Pendidikan Ilmu Pengetahuan Sosial</option>
                    <option>Pendidikan Guru Madrasah Ibtidaiyah</option>
                    <option>Pendidikan Bahasa Arab</option>
                    <option>Pendidikan Islam Anak Usia Dini</option>
                    <option>Manajemen Pendidikan Islam</option>
                    <option>Tadris Bahasa Inggris</option>
                    <option>Tadris Matematika</option>
                </optgroup>
                <optgroup label="Fakultas Syari’ah">
                    <option>al-Ahwal al-Syakhshiyyah</option>
                    <option>Hukum Bisnis Syari’ah</option>
                    <option>Hukum Tata Negara</option>
                    <option>Ilmu al-Qur'an dan Tafsir</option>
                </optgroup>
                <optgroup label="Fakultas Humaniora">
                    <option>Bahasa dan Sastra Arab</option>
                    <option>Sastra Inggris</option>
                </optgroup>
                <optgroup label="Fakultas Psikologi">
                    <option>Psikologi</option>
                </optgroup>
                <optgroup label="Fakultas Ekonomi">
                    <option>Manajemen</option>
                    <option>Akuntansi</option>
                    <option>Perbankan Syariah</option>
                </optgroup>
                <optgroup label="Fakultas Sains dan Teknologi">
                    <option>Matematika</option>
                    <option>Biologi</option>
                    <option>Fisika</option>
                    <option>Kimia</option>
                    <option>Teknik Informatika</option>
                    <option>Teknik Arsitektur</option>
                    <option>Perpustakaan dan Ilmu Informasi</option>
                </optgroup>
                <optgroup label="Fakultas Kedokteran dan Ilmu Kesehatan">
                    <option>Farmasi</option>
                    <option>Pendidikan Dokter</option>
                    <option>Profesi Dokter</option>
                </optgroup>
                <optgroup label="Pascasarjana">
                    <option>Magister Manajemen Pendidikan Islam</option>
                    <option>Magister Pendidikan Bahasa Arab</option>
                    <option>Magister Studi Ilmu Agama Islam</option>
                    <option>Magister Pendidikan Guru Madrasah Ibtidaiyah</option>
                    <option>Magister Pendidikan Agama Islam</option>
                    <option>Magister al-Ahwal al-Syakhsiyyah</option>
                    <option>Magister Ekonomi Syariah</option>
                    <option>Magister Pendidikan Matematika</option>
                    <option>Magister Biologi</option>
                    <option>Doktor Manajemen Pendidikan Islam</option>
                    <option>Doktor Pendidikan Bahasa Arab</option>
                    <option>Doktor Pendidikan Agama Islam Berbasis Studi Interdisipliner</option>
                </optgroup>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn btn-default" style="font-size: 15px; background: #009973; color: white; border: white 3px solid; border-radius: 10px; padding: 10px 15px; cursor:pointer; margin-top: 10px;">Tampilkan</button>
                </form>
                </fieldset>
            <?php 
            include 'koneksi.php';
            if(isset($_POST['jurusan'])){
                $jurusan = $_POST['jurusan'];
                echo "<b>Hasil pencarian: ".$jurusan."</b>";
            }
            ?>
            <table border="2" align="center">
                <thead>
                <tr>
                    <th>Jurusan</th>
                    <th>Biaya Pendaftaran</th>
                </tr>
                </thead>
                <?php 
                if(isset($_POST['jurusan'])){
                    $jurusan = $_POST['jurusan'];
                    $cari = "select a.nama_jurusan, b.biaya from jurusan a INNER JOIN biaya b ON a.id_biaya=b.id_biaya where a.nama_jurusan = '$jurusan'";
                    $a=$koneksi->query($cari);            
                if ($b=$a->fetch_array()){
                ?>
                <tbody>
                <tr>
                    <td><?php echo $jurusan; ?></td>
                    <td><?php echo $b['biaya']; ?></td>
                </tr>
                </tbody>
                <?php }else{
                    echo "<div><b>Oops!</b> 404 Error Server.</div> " . mysqli_error($koneksi);
                }} ?>
            </table>
        </div>
        
        <div id="myModalPeserta" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">
				<div class="avatar">
					<img src="avatar.png" alt="Avatar">
				</div>				
				<h4 class="modal-title">Login Peserta</h4>	
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<form action="aksiloginpeserta.php" method="post">
					<div class="form-group">
						<input type="text" class="form-control" name="username" placeholder="Username" required="required">		
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="password" placeholder="Password" required="required">	
					</div>        
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-lg btn-block login-btn" name="login">Login</button>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<a href="#">Forgot Password?</a>
			</div>
		</div>
	</div>
</div>
        <!-- Login Panitia -->
<div id="myModalPanitia" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">
				<div class="avatar">
					<img src="avatar.png" alt="Avatar">
				</div>				
				<h4 class="modal-title">Login Panitia</h4>	
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<form action="aksiloginpanitia.php" method="POST">
					<div class="form-group">
						<input type="text" class="form-control" name="username" placeholder="Username" required="required">		
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="password" placeholder="Password" required="required">	
					</div>        
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-lg btn-block login-btn" name="login">Login</button>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<a href="#">Forgot Password?</a>
			</div>
		</div>
	</div>
</div>
        <!-- Login Admin -->
<div id="myModalAdmin" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
			<div class="modal-header">
				<div class="avatar">
					<img src="avatar.png" alt="Avatar">
				</div>				
				<h4 class="modal-title">Login Admin</h4>	
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			</div>
			<div class="modal-body">
				<form action="aksiloginadmin.php" method="POST">
					<div class="form-group">
						<input type="text" class="form-control" name="username" placeholder="Username" required="required">		
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="password" placeholder="Password" required="required">	
					</div>        
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-lg btn-block login-btn" name="login">Login</button>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<a href="#">Forgot Password?</a>
			</div>
		</div>
	</div>
</div>
    </main><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>
</html>