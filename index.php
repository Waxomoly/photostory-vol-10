<?php
date_default_timezone_set('Asia/Jakarta'); // atur zona waktu sesuai dengan WIB
$targetDate = new DateTime('2023-04-10 00:00:00', new DateTimeZone('Asia/Jakarta')); // buat objek DateTime untuk tanggal target
$currentDate = new DateTime('now', new DateTimeZone('Asia/Jakarta')); // buat objek DateTime untuk tanggal saat ini
$itcoba = false;
if(isset($_GET['test']) && $_GET['test'] == 'yes'){
    $itcoba = true;
}

if ($currentDate < $targetDate && !$itcoba) {// periksa apakah tanggal saat ini sama dengan tanggal target
    header("Location: coming_soon.php");
    exit();
}
?>
<?php include( 'hits.php' ); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Photostory vol 10 | "Sepadan"</title>
    <link rel="icon" type="image/x-icon" href="assets/Favicon.ico" />
    
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Persma Universitas Kristen Petra" name="author" />
    <meta content="Photostory Pers Mahasiswa Universitas Kristen Petra" name="description">
    <meta content="Persma, Pers Mahasiswa, Genta, Majalah Genta, UK Petra, Universitas Kristen Petra" name="keywords">

    <link rel="stylesheet" href="assets/vendor/bootstrap_old/bootstrap.min.css">
    <script src="assets/vendor/bootstrap_old/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap_old/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" type="text/css" href="assets/vendor/flickity.css" />
    <script src="pleaseRotate.js"></script>
    <link rel="stylesheet" href="assets/vendor/animate/animate.min.css"/>

    <style>
        #pleaserotate-graphic{
            fill: #fff;
        }

        #pleaserotate-backdrop {
            color: #ff42c3;
            background-color: #000;
        }
    </style>

</head>

<body>

    <div class="hero-slider" data-carousel>
        <div class="carousel-cell" style="background-image: url(img/home.webp)">
            <div class="overlay"></div>
            <!--<img src="assets/edit/bunga-home2.png"-->
            <!--class="animate__animated animate__slideInUp" style="transform:rotate(-35deg); width: 25%; position: absolute; bottom: -18%; left: -9%" alt="" />-->

            <img src="assets/edit/kompas.png" class="animate__animated animate__fadeInLeft" style="width: 2%; position: absolute; top: 5%; left: 2%" alt="" />
            <img src="assets/edit/kompas.png" class="animate__animated animate__fadeInLeft" style="width: 2%; position: absolute; top: 10%; left: 2%" alt="" />
            <img src="assets/edit/kompas.png" class="animate__animated animate__fadeInLeft" style="width: 2%; position: absolute; top: 15%; left: 2%" alt="" />
            <!-- <img src="assets/edit/title-utama.png" class="animate__animated animate__fadeInLeft" style="width: 50%; position: absolute; bottom: 12%; left: 5%" alt="" /> -->
            <h1 class="animate__animated animate__fadeInLeft" style="color:white; position:absolute;bottom:15%;left:5%;font-family:'RuslanDisplay-Regular'; -webkit-text-stroke: 1px black; font-size: 9vw">Sepadan</h1>
            <h3 class="animate__animated animate__fadeInLeft" style="color:white; position:absolute;bottom:11%;left:5%;font-family:'RuslanDisplay-Regular'; -webkit-text-stroke: 0.75px black">Tak Lebih Dan Tak Kurang, Setiap Insan Menyala Sama Terang</h3>
            <p style="color:white;position:absolute;left:6%;top:11%;font-family:'TenorSans';width:65%;font-style:italic;" class="animate__animated animate__fadeInLeft">"Dikurasi oleh Bahar Adyaksa S.Ds."</p>
        </div>



        <div class="carousel-cell" style="background-image: url(img/4\ -\ Smarana.webp)">
            <div class="overlay"></div>
            <div class="inner">
                <h3 class="subtitle">Ada namun memudar, pluralitas sekedar melintas</h3>
                <h2 class="title">Fatamorgana</h2>
                <a href="Fatamorgana.html" class="btn">Telusuri</a>
                <a class="abaru" data-toggle="modal" data-target="#myModal1">Deskripsi</a>

            </div>

            <!--<img src="assets/edit/bunga-home3.png"-->
            <!--    class="animate__animated animate__slideInRight" style="transform:rotate(60deg); width: 15%; position: absolute; top: 9%; left: -18%" alt="" />-->
            <img src="assets/edit/Title.png" class="animate__animated animate__backInRight" style="width: 30%; position: absolute; top: 8%; left: -35%" alt="" />
           
        </div>

        <div class="carousel-cell" style="background-image: url(img/2\ -\ Pancarona.webp)">
            <div class="overlay"></div>
            <div class="inner">
                <h3 class="subtitle">Apa yang sempat terlihat, apakah bermakna?</h3>
                <h2 class="title">Pancarona</h2>
                <a href="Pancarona.html" class="btn">Telusuri</a>
                <a class="abaru" data-toggle="modal" data-target="#myModal2">Deskripsi</a>


            </div>

            <img src="assets/edit/tanaman2.png"
                class="animate__animated animate__slideInUp" style="transform:rotate(0deg); width: 40%; position: absolute; bottom: -20%; left: -112%">

            <img src="assets/edit/tanaman3.png"
                style="transform:rotate(0deg); width: 30%; position: absolute; bottom: 25%; left: -15%">

            <img src="assets/edit/flower3.png" style="width: 30%; position: absolute; bottom: -17%; left: -22%">

            <img src="assets/edit/MenjalarDulu4.png"
                style="transform:rotate(0deg); width: 10%; position: absolute; top: -10%; left: -94%">

            <img src="assets/edit/MenjalarDuluBlur.png"
                style="transform:rotate(0deg); width: 5%; position: absolute; top: -10%; left: -98%">

            <img src="assets/edit/MenjalarDuluBlur.png"
                style="transform:rotate(5deg); width: 4%; position: absolute; top: -10%; left: -15%">

            <img src="assets/edit/tanaman4.png"
                style="transform:rotate(0deg); width: 18%; position: absolute; top: -10%; left: -3%">

            <img src="assets/edit/person2.png"
                style="transform:rotate(0deg); width: 12%; position: absolute; bottom: 0%; left: 10%">

            <img src="assets/edit/star.gif"
                style="transform:rotate(0deg); width: 5%; position: absolute; top: 5%; right: 13%">

            <img src="assets/swipe.gif" style="transform:rotate(90deg); width: 7%; position: absolute; bottom: 10%; left: -110%" alt="" />

        </div>

        <div class="carousel-cell" style="background-image: url(img/1\ -\ Nawasena.webp)">
            <div class="overlay"></div>
            <div class="inner">
                <h3 class="subtitle">Membingkai kemungkinan</h3>
                <h2 class="title">Nawasena</h2>

                <a href="Nawasena.html" class="btn">Telusuri</a>
                <a class="abaru" data-toggle="modal" data-target="#myModal3">Deskripsi</a>

            </div>
            <img src="assets/edit/pohon1.png"
                style="transform:rotate(0deg); width: 30%; position: absolute; bottom: 25%; left: -20%">

            <img src="assets/edit/flower4.png"
                style="transform:rotate(0deg); width: 40%; position: absolute; bottom: -20%; left: -25%">

        </div>

        <div class="carousel-cell" style="background-image: url(img/Heterogen/Chris/A4/SAVE_20240330_085931.jpg)">
            <div class="overlay"></div>
            <div class="inner">
                <h3 class="subtitle">Aku dan Kamu, melebur dalam Divergensi</h3>
                <h2 class="title">Heterogen</h2>
                <a href="Heterogen.html" class="btn">Telusuri</a>
                <a class="abaru" data-toggle="modal" data-target="#myModal4">Deskripsi</a>

            </div>
            <img src="assets/edit/MenjalarDulu4.png"
                style="transform:rotate(0deg); width: 10%; position: absolute; top: -10%; left: -94%">

            <img src="assets/edit/MenjalarDuluBlur.png"
                style="transform:rotate(0deg); width: 5%; position: absolute; top: -10%; left: -98%">

            <img src="assets/edit/pohon2.png"
                style="transform:rotate(0deg); width: 45%; position: absolute; bottom: -10%; left: -25%">

            <img src="assets/edit/person1.png"
                style="transform:rotate(0deg); width: 7%; position: absolute; bottom: 0%; left: -20%">

            <img src="assets/edit/batu-3.png"
                style="transform:rotate(0deg); width: 18%; position: absolute; bottom: -10%; left: -8%">

            <img src="assets/edit/batu-5.png"
                style="transform:rotate(0deg); width: 18%; position: absolute; bottom: -10%; right: 2%">

        </div>


        <div class="carousel-cell" style="background-image: url(img/Regis.webp)">
            <div class="overlay"></div>
            <div class="inner">
                <a href="https://xy34gqw127y.typeform.com/c/rjbFIKeJ" style="font-size: x-large" class="btn">Regist in Here</a>
            </div>
            <img src="assets/edit/pohon3.png"
                style="transform:rotate(0deg); width: 45%; position: absolute; bottom: -10%; left: -33%">

            <img src="assets/edit/pohon2.png"
                style="transform:rotate(0deg); width: 45%; position: absolute; bottom: -10%; right: -20%">
        </div>

    </div>

                <!-- Modal 1 -->
                <div class="modal fade" id="myModal1" role="dialog">
                    <div class="modal-dialog">
                    
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"><b>Fatamorgana - Ada namun memudar, pluralitas sekedar melintas</b></h4>
                        </div>
                        <div class="modal-body">
                            <p>Pluralitas ada namun sekadar melintas.</p> 
                            <p>Apa yang di depan mata itu nyata, ataukah ilusi semata?</p>
                            <p>Kalau kata musafir di tanah tandus, ibarat utopia, terlalu indah tuk dibilang nyata.</p> 
                            <p>Kerjapkan mata yang terkubur zaman, mungkin cuplikan utopia tadi menjadi elemen realita.</p>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    
                    </div>
                </div>

                <!-- Modal 2 -->
                <div class="modal fade" id="myModal2" role="dialog">
                    <div class="modal-dialog">
                    
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"><b>Pancarona – Apa yang sempat terlihat, apakah bermakna?</b></h4>
                        </div>
                        <div class="modal-body">
                            <p>Seiring berjalannya waktu, manusia mulai terikat dengan perspektif tertentu.</p> 
                            <p>Sepasang mata untuk melihat, detakan jantung guna merasa.</p>
                            <p>Berikut kisah mereka yang memiliki kreativitas sendiri untuk menemukan rona dalam kelabu.</p>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    
                    </div>
                </div>

                <!-- Modal 3 -->
                <div class="modal fade" id="myModal3" role="dialog">
                    <div class="modal-dialog">
                    
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"><b>Nawasena - membingkai kemungkinan</b></h4>
                        </div>
                        <div class="modal-body">
                            <p>Hati ibarat jendela yang tertutup rapat. Walau begitu, sudah waktunya bagi bilik hati ini untuk membuka diri.</p>
                            <P>Menangkal kekhawatiran kemarin, menatap kesempatan yang datang kian sering. Kadang membutuhkan retakan di ruang gelap agar cahaya dapat mengintip masuk. Ibarat rumah tua yang awalnya tidak menarik, tapi tetap hidup menyimpan rahasianya.</P>
                            <P>Di bingkai jendela kali ini, bukalah, dan intiplah serangkaian cerita di dalamnya.</p>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    
                    </div>
                </div>  
                
                <!-- Modal 4 -->
                <div class="modal fade" id="myModal4" role="dialog">
                    <div class="modal-dialog">
                    
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"><b>Heterogen - bayangan kemarin, peta esok hari</b></h4>
                    </div>
                        <div class="modal-body">
                            <P>
                                Bagai bumbu dalam masakan, jadikan hidangan beraneka cita rasa.  
                            </P>
                            <P>
                                Pisahkan segala bumbu, maka timbul rasa kehampaan.
                            </P>
                            <P>
                                Tidak semua hal sejatinya dapat dipisahkan.
                            </P>
                            <P>
                                Persatuan mereka seringkali membawa keharmonisan.
                            </P>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    
                    </div>
                </div>  

                <style>
                    .modal-backdrop {
                    background-color: rgba(0, 0, 0, 0.5);
                    backdrop-filter: blur(5px);
                    }

                    .modal {
                    background-color: transparent;
                    border-radius: 5px;
                    box-shadow: none;
                    overflow: hidden;
                    }

                    .modal-content {
                    background-color: #fff;
                    border-radius: 5px;
                    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
                    overflow: hidden;
                    }
                </style>


                <style>
                    #page-loader {
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        position: fixed;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        background-color: #fff;
                        z-index: 9999;
                    }


                    .loader {
                        border: 10px solid #f3f3f3;
                        border-top: 10px solid #ff42c3;
                        border-radius: 50%;
                        width: 50px;
                        height: 50px;
                        animation: spin 2s linear infinite;
                    }

                    @keyframes spin {
                        0% {
                            transform: rotate(0deg);
                        }

                        100% {
                            transform: rotate(360deg);
                        }
                    }
                    a {
                        color: white;

                    }
                </style>

                    <script>
                        window.onload = function() {
                            var images = document.getElementsByTagName('img');
                            var loaded = 0;

                            for (var i = 0; i < images.length; i++) {
                                if (images[i].complete) {
                                    loaded++;
                                }
                            }

                            if (loaded == images.length) {
                                var loader = document.getElementById('page-loader');
                                loader.style.display = 'none';
                            }
                        };
                    </script>

        <div id="page-loader">
            <div class="loader"></div>
        </div>
    
                    <script src="assets/vendor/flickity.pkgd.min.js"></script>
                    <script type="text/javascript" src="script.js"></script>

</body>

</html>