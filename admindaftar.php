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

    <!-- Place your stylesheet here-->
    <link href="/css/stylesheet.css" rel="stylesheet" type="text/css">
</head>
<style>
    th {
        display: table-cell;
        vertical-align: inherit;
        font-weight: bold;
        text-align: center;
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
                <a class="nav-link" href="adminjadwal.php">Jadwal PMB</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="adminalur.php">Alur PMB</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="adminpersyaratan.php">Persyaratan PMB</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="adminbiaya.php">Biaya PMB</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="admindaftar.php">Data Peserta PMB <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="index.php">Logout</a>
                </div>
            </li>
        </ul>
    </div>
</nav>

    <main role="main" class="container">

        <div class="text-center mt-5 pt-5">
            <h1><ins>Data Pendaftar</ins></h1>  
        <table width="530" border="1" align="center">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Jenis Kelamin</th>
                <th>Tinggi Badan</th>
                <th>Berat Badan</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Kewarganegaraan</th>
                <th>No. Telepon</th>
                <th>Email</th>
                <th>Foto</th>
                <th>KTP</th>
                <th>Ijazah</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "koneksi.php";
            $no=1;
            $a="SELECT * FROM maba";
            $b=$koneksi->query($a);
            while($c=$b->fetch_array()){
            ?>
            <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo $c['nama'];?></td>
                <td><?php echo $c['id_jurusan'];?></td>
                <td><?php echo $c['jeniskelamin'];?></td>
                <td><?php echo $c['tinggibadan'];?></td>
                <td><?php echo $c['beratbadan'];?></td>
                <td><?php echo $c['tmptlahir'];?></td>
                <td><?php echo $c['tgllahir'];?></td>               
                <td><?php echo $c['alamat'];?></td>
                <td><?php echo $c['kewarganegaraan'];?></td>
                <td><?php echo $c['notlp'];?></td>
                <td><?php echo $c['email'];?></td>
                <td align="center"><img src="img/<?php echo $c['foto'];?>" width="150px"></td>
                <td align="center"><img src="img/<?php echo $c['ktp'];?>" width="150px"></td>
                <td align="center"><img src="img/<?php echo $c['ijazah'];?>" width="150px"></td>
            </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
        </div>

    </main><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>