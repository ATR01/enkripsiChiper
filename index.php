<html>
<title>EnkripsiChiper</title>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<?php include 'chiper.php';?>
<div class="banner">
    <div class="bg-color">
        <div class="container">
            <div class="row">
                <div class="col-sm-12" style="max-width: 900px; float: none; margin: 0 auto; margin-top: 40px; margin-bottom: 0px; color: white;">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Kriptografi</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-md-7" 
                                style= "padding: 50px 15px; color: white;">
                                    <h4>Enkripsi</h4>
                                    <p>enkripsi adalah proses mengamankan suatu informasi dengan membuat informasi tersebut tidak dapat dibaca tanpa bantuan pengetahuan khusus.. Enkripsi pada aplikasi ini adalah Kombinasi Chipper Key dan Caesar Chipper</p>
                                </div>
                                <div class="col-md-5" style= "padding: 10px; color: white;">
                                    <!-- start Form Enkripsi -->
                                    <form action="" method="post" style="padding: 0px; margin: 0 auto;">
                                    <input class="form-control smooth text-center" placeholder="Kunci" name="kunci" type="text" style="width: 100%; height:50px; margin-bottom:15px;"/>
                                    <textarea class="form-control smooth text-center" rows="3" name="pesan" id="pesan" placeholder="Ketikan Pesan.."></textarea>
                                    <input type="submit" name="klik" value="Run"  class="smooth cari btn btn-info btn-circle btn-lg" style="background-color: #4b4b4b; border-color: #383838; margin-top:15px;">
                                    </form>
                                    <!-- End Form Enkripsi -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 15px;margin-bottom: 50px;">
                        <div class="col-md-6">
                            <h5>Detail Proses</h5>
                            
                                <?php 
                                if (isset($_POST['klik'])) {
                                    $kunci=$_POST['kunci'];
                                    $pesan=$_POST['pesan'];
                                    //Input
                                    $plainText = $pesan;
                                    $chiperkeyText = enkripsi($plainText, $kunci); ?>
                                    <p style="padding:0px; margin:0 auto;"> Kunci : <?php echo $kunci; ?></p>
                                    <p>Pesan Teks : <?php echo $plainText; ?></p>
                                <?php } else {?>
                                    <p style="padding:0px; margin:0 auto;">
                                        Menunggu Proses Masukan..</p>
                                <?php };?>
                        </div>
                        <div class="col-md-6" style="padding-top: 15px;">
                            <h5>Hasil Pesan Enkripsi</h5>
                            
                                <?php 
                                if (isset($_POST['klik'])) {
                                    $kunci=$_POST['kunci'];
                                    $pesan=$_POST['pesan'];
                                    //Input
                                    $plainText = $pesan;
                                    $chiperkeyText = enkripsi($plainText, $kunci); ?>
                                    <p><?php echo $cipherText = Encipher($chiperkeyText, 3); ?></p>
                                <?php } else {?>
                                    <p style="padding:0px; margin:0 auto;">
                                        Menunggu Proses Masukan..</p>
                                <?php };?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
            <div class="row">
                <div class="col-sm-12" style="max-width: 900px; float: none; margin: 0 auto; margin-top: 40px; margin-bottom: 0px; color: #4b4b4b;">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Kriptografi</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-md-7" 
                                style= "padding: 50px 15px; color: #4b4b4b;">
                                    <h4>Dekripsi</h4>
                                    <p>Deskripsi adalah pengolahan data menjadi sesuatu yang dapat diutarakan secara jelas dan tepat dengan tujuan dimengerti oleh orang yang tidak langsung mengalaminya sendiri. Enkripsi pada aplikasi ini adalah Kombinasi Chipper Key dan Caesar Chipper</p>
                                </div>
                                <div class="col-md-5" style= "padding: 10px; color: white;">
                                    <!-- start Form Enkripsi -->
                                    <form action="" method="post" style="padding: 0px; margin: 0 auto;">
                                    <input class="form-control smooth text-center" placeholder="Kunci" name="kunci2" type="text" style="width: 100%; height:50px; margin-bottom:15px;"/>
                                    <textarea class="form-control smooth text-center" rows="3" name="pesan2" id="pesan" placeholder="Ketikan pesan.."></textarea>
                                    <input type="submit" name="klik2" value="Run"  class="smooth cari btn btn-info btn-circle btn-lg" style="background-color: #4b4b4b; border-color: #383838; margin-top:15px;">
                                    </form>
                                    <!-- End Form Enkripsi -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row" style="padding-top: 15px;;margin-bottom: 50px;">
                        <div class="col-md-6">
                            <h5>Detail Proses</h5>
                            
                                <?php 
                                if (isset($_POST['klik2'])) {
                                    $kunci=$_POST['kunci2'];
                                    $pesan=$_POST['pesan2'];
                                    //Input
                                    $plainText = $pesan;
                                    $chiperkeyText = enkripsi($plainText, $kunci);
?>
                                    <p style="padding:0px; margin:0 auto;"> Kunci : <?php echo $kunci; ?></p>
                                    <p>Teks Enkripsi : <?php echo $plainText; ?></p>
                                <?php } else {?>
                                    <p style="padding:0px; margin:0 auto;">
                                        Menunggu Proses Masukan..</p>
                                <?php };?>
                        </div>
                        <div class="col-md-6" style="padding-top: 15px;">
                            <h5>Hasil Pesan Dekripsi</h5>
                            
                                <?php 
                                if (isset($_POST['klik2'])) {
                                    $kunci=$_POST['kunci2'];
                                    $pesan=$_POST['pesan2'];
                                    //Input
                                    $plainText = $pesan;
                                    
                                    $cipherText2 = Decipher($plainText, 3); ?>
                                    <p><?php  echo dekripsi($cipherText2, $kunci); ?></p>
                                <?php } else {?>
                                    <p style="padding:0px; margin:0 auto;">
                                        Menunggu Proses Masukan..</p>
                                <?php };?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!--Footer-->
      <footer class="page-footer font-small stylish-color-dark pt-4 mt-4"  style="background-color:#f5f5f5">
          <!--Footer Links-->
          <div class="container text-center text-md-left">
              <!-- Footer links -->
              <div class="row text-center text-md-left mt-3 pb-3">
                  <!--First column-->
                  <div class="col-md-6 col-lg-6 col-xl-6 mx-auto mt-3">
                      <h6 class="text-uppercase mb-2 font-weight-bold">Profile Aplikasi</h6>
                      <p>Aplikasi Enkripsi dan Dekripsi dengan Caesar Cipher adalah aplikasi sederhana yang digunakan untuk mengenkripsi dan mendekripsi pesan dengan teknik Caesar Cipher.</p>
                  </div>
                  <!--/.First column-->
                  <hr class="w-100 clearfix d-md-none">
                  <!--Fourth column-->
                  <div class="col-md-6 col-lg-6 col-xl-6 mx-auto mt-3">
                      <h6 class="text-uppercase mb-2 font-weight-bold">Kontak</h6>
                      <i class="fa fa-home"></i>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <br/>
                      <i class="fa fa-envelope"></i>loremipsum@mail.com
                      <i class="fa fa-phone"></i> +123 222 333
                  </div>
              </div>
              <hr>
              <div class="row d-flex align-items-center">
                  <!--Grid column-->
                  <div class="col-md-8 col-lg-8">
                      <!--Copyright-->
                      <p class="text-center text-md-left grey-text">&copy; <?php echo date("Y"); ?> All rights reserved</p>
                      <!--/.Copyright-->
                  </div>
                  <!--Grid column-->
              </div>
          </div>
      </footer>
      <!--/.Footer-->
</body>
</html>
