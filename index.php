<?php 
    require 'configData.php'
?>

<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous">

        <!-- icon awesome CSS -->
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">

        <!-- css -->
        <link rel="stylesheet" href="styleUpdateDataCovidHarian.css">

        <title>Covid-19 Data</title>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <a class="navbarBranding" href="#">Covid-19 Indonesia Data</a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                id="navbarDropdown"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item" href="#">Action</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Another action</a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            <section id="homeStatistikIndonesiaUpdate">
                <div class="container-fluid">
                    <div class="container">
                        <p class="homeStatistikIndonesiaUpdate-Judul">Monitoring Covid-19 Indonesia Data</p>
                        <div class="row">
                            <div class="col-3 cardSection1">
                                <div class="cardFahriPendek row1-point1">
                                    <div class="container">
                                        <div class="row1-icon row1-point1-icon">
                                            <i class="fas fa-plus"></i>
                                        </div>
                                        <p class="valueCard">
                                            <?php 
                                            echo $totalJumlahKasusPositif
                                        ?>
                                        </p>
                                        <p class="keyCard">
                                            TERKONFIRMASI
                                        </p>
                                        <p class="angkaCard">
                                            <span class="angka">
                                                <?php 
                                                echo "+".$penambahanKasusPositif
                                            ?>
                                            </span>
                                            Kasus
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 cardSection1">
                                <div class="cardFahriPendek row1-point2">
                                    <div class="container">
                                        <div class="row1-icon row1-point2-icon">
                                            <i class="fas fa-user-md"></i>
                                        </div>
                                        <p class="valueCard">
                                            <?php 
                                            echo $totalJumlahDirawat
                                        ?>
                                        </p>
                                        <p class="keyCard">
                                            KASUS AKTIF
                                        </p>
                                        <p class="angkaCard">
                                            <span class="angka">
                                                <?php
                                                echo $penambahanDirawat
                                            ?>
                                            </span>
                                            Kasus Aktif
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 cardSection1">
                                <div class="cardFahriPendek row1-point3">
                                    <div class="container">
                                        <div class="row1-icon row1-point3-icon">
                                            <i class="fas fa-heartbeat"></i>
                                        </div>
                                        <p class="valueCard">
                                            <?php 
                                            echo $totalJumlahKasusSembuh
                                        ?>
                                        </p>
                                        <p class="keyCard">
                                            SEMBUH
                                        </p>
                                        <p class="angkaCard">
                                            <span class="angka">
                                                <?php 
                                                echo "+".$penambahanKasusSembuh
                                            ?>
                                            </span>
                                            Kasus Sembuh
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 cardSection1">
                                <div class="cardFahriPendek row1-point4">
                                    <div class="container">
                                        <div class="row1-icon row1-point4-icon">
                                            <i class="fas fa-minus"></i>
                                        </div>
                                        <p class="valueCard">
                                            <?php 
                                            echo $totalJumlahKasusMeninggal
                                        ?>
                                        </p>
                                        <p class="keyCard">
                                            MENINGGAL
                                        </p>
                                        <p class="angkaCard">
                                            <span class="angka">
                                                <?php 
                                                echo "+".$penambahanKasusMeninggal
                                            ?>
                                            </span>
                                            Kasus Meninggal
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="margin-top: 1.2rem;">
                            <div class="col-6">
                                <div class="cardFahriPanjang">
                                    <div class="container">
                                        <div class="row2-icon row2-point1-icon">
                                            <i class="fas fa-code-branch"></i>
                                        </div>
                                        <p class="valueCard">
                                            <?php 
                                            echo $totalSpesimenDiperiksa
                                        ?>
                                        </p>
                                        <p class="keyCard">
                                            TOTAL SPESIMEN DIPERIKSA
                                        </p>
                                        <p class="angkaCard">
                                            PCR + TCM=
                                            <span class="totalPcrTcm">
                                                <?php 
                                                echo $totalJumlahSpesimenDiperiksaPcrTcm
                                            ?>
                                            </span>
                                            (+
                                            <span class="penambahanPcrTcm">
                                                <?php 
                                                echo $penambahanJumlahSpesimenDiperiksaPcrTcm
                                            ?>
                                            </span>)
                                        </p>
                                        <p class="angkaCard">
                                            ANTIGEN=
                                            <span class="totalAntigen">
                                                <?php 
                                                echo $totalJumlahSpesimenDiperiksaAntigen
                                            ?>
                                            </span>
                                            (+
                                            <span class="penambahanAntigen">
                                                <?php 
                                                echo $penambahanJumlahSpesimenDiperiksaAntigen
                                            ?>
                                            </span>)
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="cardFahriPanjang">
                                    <div class="container">
                                        <div class="row2-icon row2-point2-icon">
                                            <i class="fas fa-thermometer"></i>
                                        </div>
                                        <p class="valueCard">
                                            <?php 
                                            echo $totalOrangDiperiksa
                                        ?>
                                        </p>
                                        <p class="keyCard">
                                            TOTAL ORANG DIPERIKSA
                                        </p>
                                        <p class="angkaCard">
                                            PCR + TCM=
                                            <span class="totalPcrTcm">
                                                <?php 
                                                echo $totalJumlahSpesimenOrangDiperiksaPcrTcm
                                            ?>
                                            </span>
                                            (+
                                            <span class="penambahanPcrTcm">
                                                <?php 
                                                echo $penambahanJumlahOrangDiperiksaPcrTcm
                                            ?>
                                            </span>)
                                        </p>
                                        <p class="angkaCard">
                                            ANTIGEN=
                                            <span class="totalAntigen">
                                                <?php 
                                                echo $totalJumlahorangDiperiksaAntigen
                                            ?>
                                            </span>
                                            (+
                                            <span class="penambahanAntigen">
                                                <?php 
                                                echo $penambahanJumlahorangDiperiksaAntigen
                                            ?>
                                            </span>)
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row" style="margin-top: 1.2rem;">
                            <div class="col-6">
                                <div class="cardFahriPanjang2">
                                    <div class="container">
                                        <div class="row3-icon row3-point1-icon">
                                            <i class="fas fa-syringe"></i>
                                        </div>
                                        <p class="valueCard">
                                            <?php 
                                            echo $totalVaksinasiKe1
                                        ?>
                                        </p>
                                        <p class="keyCard">
                                            VAKSINASI KE-1
                                        </p>
                                        <p class="angkaCard">
                                            +
                                            <?php 
                                            echo $penambahanVaksinasiKe1
                                        ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="cardFahriPanjang2">
                                    <div class="container">
                                        <div class="row3-icon row3-point2-icon">
                                            <i class="fas fa-syringe"></i>
                                        </div>
                                        <p class="valueCard">
                                            <?php 
                                            echo $totalVaksinasiKe2
                                        ?>
                                        </p>
                                        <p class="keyCard">
                                            VAKSINASI KE-2
                                        </p>
                                        <p class="angkaCard">
                                            +
                                            <?php 
                                            echo $penambahanVaksinasiKe2
                                        ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer>
            <p>Design and Develop by
                <span>SpaceCapt</span>@2021</p>
        </footer>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>

    </body>

</html>