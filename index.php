<?php
    include "config.php";
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="img/logo.png">
    <title>Jadwal Kuliah | UTI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <!-- Navbar -->
    
    <nav class="navbar navbar-expand-lg" style="background-color: #d73925;" style="color: #ffffff;">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="#">JADWAL PERKULIAHAN</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link disabled text-white">
            <img src="img/logo.png" alt="UTI" width="30" height="30">    
            <b>UNIVERSITAS TEKNOKRAT INDONESIA</b></a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
    <!-- Navbar -->
    <br>
    <!-- Wadah -->
    <div class="container">
    <!-- Content -->
    <div class="row">
            <div class="col-md-12">
                <div class="bg-primary text-white">
                <img src="img/filter.png" alt="UTI" width="30" height="30">
                <b>FILTER JADWAL</b>
                </div>
            </div>
            <div class="col-md-12">
                <div class="bg-light">
                <form action="index.php" method="GET">
                    <br>
                    <div class="input-group">
                    <select name="kelas" class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                        <option selected value="">Kelas</option>
                        <option value="IF 22 A">IF 22 A</option>
                        <option value="IF 22 B">IF 22 B</option>
                        <option value="IF 22 C">IF 22 C</option>
                        <option value="IF 22 D">IF 22 D</option>
                        <option value="IF 22 E">IF 22 E</option>
                    </select>
                    <input class="btn btn-outline-primary" type="submit" value="Cari Jadwal">
                    </div>
                        <?php
                            if(isset($_GET['kelas'])){
                            $kelas = $_GET['kelas'];
                            echo "<b>Hasil pencarian : ".$kelas."</b>";
                            }
                        ?>
                    </div>
                </form>
            </div>
        </div>
        <br>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Kelas</th>
                <th scope="col">Hari</th>
                <th scope="col">Jam</th>
                <th scope="col">Nama Dosen</th>
                <th scope="col">Matakuliah</th>
                <th scope="col">Ruangan</th>
                </tr>
            </thead>
            <?php
            if(isset($_GET['kelas'])){
                $kelas = $_GET['kelas'];
                $sql = "SELECT * FROM tbl_jadwaldosen WHERE kelas LIKE '%".$kelas."%'";
            }else {
                $sql = "SELECT * FROM tbl_jadwaldosen";
            }
                $hasil = mysqli_query($koneksi, $sql);

                while($datadosen = mysqli_fetch_array($hasil)){
                    echo "<tr>";
                    echo "<td>".$datadosen['kelas']."</td>";
                    echo "<td>".$datadosen['hari']."</td>";
                    echo "<td>".$datadosen['jam_pelajaran']."</td>";
                    echo "<td>".$datadosen['nama_dosen']."</td>";        
                    echo "<td>".$datadosen['matakuliah']."</td>"; 
                    echo "<td>".$datadosen['ruangan']."</td>"; 
                    echo "</tr>";
                }
                
            ?>
            <tbody>

            </tbody>
        </table>
    </div>
    <!-- Content -->
    </div>
    <!-- Wadah -->

    <!-- Footer -->
    <div class="clearfix"></div><br>
    <div class="text-center">
        <p>&copy; 2022 Gayu Gumelar</p>
    </div>
    <!-- Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>