<?php
  require 'functions.php';
  $universitas= query("SELECT * FROM daftaruniv");
  $prodi= query("SELECT * FROM univprodi");
?>

<!-- submission -->
<?php

  $conn = mysqli_connect("localhost","root", "", "rasiosnm");

  if (isset($_POST["submit"])) {

      if (tambah($_POST)>0){
        echo "
          <script>
            alert('data berhasil ditambahkan!');
            document.location.href = 'index.php'
          </script>";
      }else{
        echo "
        <script>
          alert('data gagal ditambahkan!');
        </script> ";
      }
  };


 ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      
      <link rel="stylesheet" href="style.css">

    <!-- fonts links -->
    <link href="https://fonts.googleapis.com/css?family=Patua+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Biryani:400,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://netdna.bootstrapcdn.com/font-awesome/55.2.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,700i,900,900i&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


    <title>Rasionalisasi SNM SMAGA</title>
  </head>

  <body class="bg-light">

    <div style="padding-left:20px;" class="text-align-left justify-content-left align-items-left">
        <h1>Rasionalisasi <br> SNMPTN</h1>
    </div>


      <nav id="navbarid" class="navbar navbar-expand-lg navbar-dark" >
        <div class="text-align-left justify-content-left align-items-left row" style="padding-left:10px;">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation" style="border: none; color: rgba(255,255,255,1) !important;">
            <span class="navbar-toggler-icon"></span>
          </button>
          <a class="nav-item nav-link active" href="#" style="font-size:13px; padding:7px !important; top:3px;">Home</a>
          <a class="nav-item nav-link active" href="#" style="font-size:13px; padding:7px !important; top:3px;">Result</a>
          <a class="nav-item nav-link" href="#" style="font-size:13px; padding:7px !important; top:3px;">Features</a>
        </div>


        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
           <span class="sr-only">(current)</span>
            <a class="nav-item nav-link" href="#">Pricing</a>
            <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </div>
        </div>
      </nav>



      <div class="justify-content-center align-items-center" style="padding-top:20px; background-color: #f5f8ff;">
        <img style="margin-top: 20px; width:100%;" src="https://i.imgur.com/VSKO7os.png" alt="">
        <h2 class="color" style="margin-bottom:0 !important;">FEATURED UNIV</h2>
      </div>
      <div class="divfeatureduniv  align-items-center" style=" background-color: #f5f8ff;">

          <div class="featureduniv text-align-center">
            <a class="auniv" href="#">ITB</a>
            <img class="imguniv"  src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcS15Gga-R3FPUJsH6mxy91JDptTfoCBiPgYf1ZcDJa4BVGXqbba" alt="" style="filter:  hue-rotate(180deg) brightness(75%) saturate(2.5)!important;"
          />
          </div>
          <div class="featureduniv text-align-center">
            <a class="auniv" href="#">UGM</a>
            <img class="imguniv" src="https://cdn0-production-images-kly.akamaized.net/hVFTmxP2OLfEsVUmSSkUiTR2DAA=/640x360/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/1602441/original/009190100_1495515848-UGM.jpg" alt="" style="filter:  hue-rotate(180deg) brightness(75%) saturate(2.5)!important;"
          />
          </div>
          <div class="featureduniv text-align-center">
            <a class="auniv" href="#">UI</a>
            <img class="imguniv" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTOYy_dRVQrPDHyKAWqLg2A3-OtWu9KPGmv7zf0ba_DqxQkXorg" alt="" style="filter:  hue-rotate(180deg) brightness(75%) saturate(2.5)!important;"
          />
          </div>

          <div class="featureduniv text-align-center">
            <a class="auniv" href="#">IPB</a>
            <img class="imguniv" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcTDXrxUyjAjqF82C8sZIlu3Mxa-bPiP87ZwHZSZX05G55voVDr3" alt="" style="filter:  hue-rotate(170deg) brightness(75%) saturate(1)!important;"
          />
          </div>
          <div class="featureduniv text-align-center">
            <a class="auniv" href="#">ITS</a>
            <img class="imguniv" src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSlhnt6vDxLA4_b4eWBRvxvOJhovHgsuGKdTKsMEY35zG44TpZz" alt="" style="filter:  hue-rotate(180deg) saturate(1) brightness(75%) !important;"
          />
          </div>
          <div class="featureduniv text-align-center">
            <a class="auniv" href="#">UNDIP</a>
            <img class="imguniv" src="https://i0.wp.com/portalsemarang.com/wp-content/uploads/2014/09/widya-puraya-07.jpg?fit=620%2C400&w=640" alt="" style="filter: brightness(75%) saturate(1.5) hue-rotate(180deg) !important;"
          />
          </div>



      </div>

    <div class="bg-light" style="padding: 0 30px 30px 30px; ">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Ranking DIKTI</a>
        <button style="border: solid 1px #1976d2;" class=" navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <p style="font-size:15px; margin-bottom:0 !important; color: #1976d2;">lihat	&#9663;</p>
        </button>

        <div class="collapse navbar-collapse divdikti" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <p> Klasterisasi PTN Non-Vokasi 2k19 </p>
            </li>
            <li class="nav-item active">
              <p> </p>
            </li>
            <li class="nav-item active">
              <p><b style="color:gold; font-size: 18px;">1</b><b> &nbsp; Institut Teknologi Bandung</b></p>
            </li>
            <li class="nav-item">
              <p><b style="color:silver; font-size: 18px;">2</b><b> &nbsp; Universitas Gadjah Mada</b></p>
            </li>
            <li class="nav-item">
              <p><b style="color:rgb(190,130,0); font-size: 18px;">3</b><b> &nbsp; Institut Pertanian Bogor</b></p>
            </li>
            <li class="nav-item">
              <p>4  &nbsp;&nbsp; Institut Teknologi 10 Nov</p>
            </li>
            <li class="nav-item">
              <p>5  &nbsp;&nbsp; Universitas Indonesia</p>
            </li>
            <li class="nav-item">
              <p>6  &nbsp;&nbsp; Universitas Diponegoro</p>
            </li>
            <li class="nav-item">
              <p>7  &nbsp;&nbsp; Universitas Airlangga</p>
            </li>
            <li class="nav-item">
              <p>8  &nbsp;&nbsp; Universitas Hasanuddin</p>
            </li>
            <li class="nav-item">
              <p>9  &nbsp;&nbsp; Universitas Brawijaya</p>
            </li>
            <li class="nav-item">
              <p>10 &nbsp;Universitas padjajaran</p>
            </li>
            <li class="nav-item align-item-right">
              <a style="margin-left:30px; color:#1976d2;" href="#">Lihat lebih lanjut...</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>



    <div id="divformid" class="container-fluid h-100 text-dark" style="background-color:rgb(240,240,240);">
      <div class="justify-content-center align-items-center">
        <h2 class="color">INPUT DATAMU</h2>
      </div>
      <img src="https://i.imgur.com/IRMTm9k.png" alt="" style="height: 100%; width: 100%; object-fit: cover;">
      <div id="divform" class="row justify-content-center align-items-center">
        <form method="POST" action="">
          <div class="form-group">
            <label for="namasiswa">Nama Lengkap</label>
            <input name="nama" type="text" class="form-control" id="nama" style='text-transform:uppercase'>
          </div>
          <div class="form-group">
            <label for="nis">Nomor Induk Siswa</label>
            <input name="nis" type="text" class="form-control" id="nis" style='text-transform:uppercase'>
          </div>
          <div class="row">
            <div class="col-6">
              <div id="selex" class="form-group">
                <label for="kelas">Pilih Kelas</label>
                <select name="kelas" id="kelas" class="custom-select">
                  <option selected>Pilih Kelas</option>
                  <option value="MIPA 1">XII MIPA 1</option>
                  <option value="MIPA 2">XII MIPA 2</option>
                  <option value="MIPA 3">XII MIPA 3</option>
                  <option value="MIPA 4">XII MIPA 4</option>
                  <option value="MIPA 5">XII MIPA 5</option>
                  <option value="MIPA 6">XII MIPA 6</option>
                  <option value="MIPA 7">XII MIPA 7</option>
                  <option value="MIPA 8">XII MIPA 8</option>
                  <option value="MIPA 9">XII MIPA 9</option>
                  <option value="MIPA 10">XII MIPA 10</option>
                  <option value="MIPA 11">XII MIPA 11</option>
                  <option value="MIPA 12">XII MIPA 12</option>
                  <option value="MIPA 13">XII MIPA 13/OLM</option>
                  <option value="IPS 1">XII IPS 1</option>
                  <option value="IPS 2">XII IPS 2</option>
                </select>
              </div>
            </div>
            <div class="col-6">
              <div class="form-group">
                <label for="nilairpt">Rata2 Rapor</label>
                <input name="nilairpt" type="text" class="form-control" id="nilairpt">
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="passw">Password</label>
            <input name="passw" type="text" class="form-control" id="passw">

          </div>

          <div class="row">
            <div class="col-6">
              <input type="radio" id="klastersanid" name="klaster" value="0" onchange="refreshuniv();refreshprodi();"><label for="klaster">&nbsp;SAINTEK</label>
            </div>
            <div class="col-6">
              <input type="radio" name="klaster" id="klastersosid" value="1" onchange="refreshuniv();refreshprodi();"><label for="klaster">&nbsp;SOSHUM</label>
            </div>
          </div>

          <div id="univdiv" class="form-group">
            <label for="univ">Universitas</label>
            <select name="selectedValue" id="selecan" class="custom-select" onchange="getval(this);">
              <option value="" selected>Pilih Universitas</option>

              <?php foreach ($universitas as $unv) : ?>
                <option value="<?=($unv->univ);?>" ><?=($unv->univ); ?></option>

                <?php endforeach; ?>

            </select>
          </div>
          <div id="prodidiv" class="form-group">
            <label for="prodi">Kelas</label>
            <select name="prodiselecan" id="prodiselecan" class="custom-select" >
              <option selected>Pilih Prodi</option>
              <?php foreach ($prodi as $prd) : ?>
                <option value="<?=($prd->prodi); ?>"><?=($prd->prodi); ?></option>
              <?php endforeach; ?>
            </select>
          </div>
          <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            <br><br><br>
        </form>


      </div>
    </div>


    <div style="background-color:white;"id="divseerank" class="justify-content-center container-fluid h-100  text-dark">
      <div class="justify-content-center align-items-center">
        <h2 class="color">LIHAT HASIL</h2>
      </div>
      <img class="mx-auto" style="width:90%;margin:20px auto 0 auto; display:block;  filter: hue-rotate(10deg);" src="https://image.freepik.com/free-vector/opened-business-plan-documents-binder_3446-634.jpg" alt="">
      <p style="padding:0 25px;text-align: justify; font-size:15px;" class="lead">Data nilai rapormu akan dianalisis serta disajikan dalam tiap jurusan bersama teman-teman satu sma-mu untuk melihat seberapa ketat persaingan SNM jurusan pilihanmu
      <br><br>
      Yuk buruan lihat hasilnya!</p>
      <button type="button" style="margin-left:25px;"class="btn btn-primary" name="button"  onclick="window.location.href = 'rank.php';">LIHAT DISINI</button>
    </div>

    <div style="background: linear-gradient(90deg, rgba(1,99,44,1) 0%, rgba(2,95,97,1) 100%); margin-top:40px;padding:15px 0; color:white;" class="container">
      <p  style="padding:0 25px;text-align: center; font-size:20px; margin-bottom:0 !important;" class="lead">Developed by Errbint</p>
      <p style="padding:0 25px;text-align: center; font-size:15px; margin-bottom:0 !important;" class="lead">instagram.com/errbint</p>
    </div>






































    <!-- Optional JavaScript -->

    <script type="text/javascript">
      var selecan = document.getElementById('selecan');
      var prodiselecan = document.getElementById('prodidiv');
      var boolklas;

      document.getElementById('klastersosid').onclick = function() {

          if ( this.checked ) {
              boolklas = '1';
          }
      };

      document.getElementById('klastersanid').onclick = function() {

          if ( this.checked ) {
              boolklas = '0';
          }
      };


      function getval(sel){
        var selectedVal = sel.value;
          var xhr = new XMLHttpRequest();


          xhr.onreadystatechange = function(){
            if( xhr.readyState == 4 && xhr.status == 200){
              prodiselecan.innerHTML = xhr.responseText;
            }
          }
          xhr.open('GET', 'ajax/ajax.php?keyword=' + selectedVal + '&boolklas=' + boolklas, true);
          xhr.send();

      }


      function refreshuniv(){
        var xhr = new XMLHttpRequest();

        xhr.onreadystatechange = function(){
          if( xhr.readyState == 4 && xhr.status == 200){
            selecan.innerHTML = xhr.responseText;
          }
        }
          xhr.open('GET', 'ajax/ajax3.php', true);
          xhr.send();


      }

      function refreshprodi(){
        var xhr = new XMLHttpRequest();

        xhr.onreadystatechange = function(){
            if( xhr.readyState == 4 && xhr.status == 200){
              prodiselecan.innerHTML = xhr.responseText;
            }
          }
            xhr.open('GET', 'ajax/ajax5.php', true);
            xhr.send();

      }


   </script>




    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

    <script src="js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
