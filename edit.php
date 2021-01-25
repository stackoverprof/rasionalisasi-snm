<?php
  require 'functions.php';
  $conn = mysqli_connect("localhost","root", "", "rasiosnm");

  $universitas= query("SELECT * FROM daftaruniv");
  $prodi= query("SELECT * FROM univprodi");

      $nis = $_GET["nis"];

      $swa = "";


  if (isset($_POST["submit"])) {

      if (edit($_POST)>0){
        echo "
          <script>
            alert('data berhasil diubah!');
          </script>";
      }else{
        echo "
          <script>
            alert('data gagal diubah!');
          </script> ";
      }
    }






 ?>





<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <link rel="stylesheet" href="style.css">

    <!-- fonts links -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Biryani:400,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://netdna.bootstrapcdn.com/font-awesome/55.2.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,700i,900,900i&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


    <title>Rasionalisasi SNM SMAGA</title>
  </head>




  <body>
    <nav style="margin-top: 0px !important;" id="navbarid" class="navbar navbar-expand-lg navbar-dark">
      <a class="nav-item nav-link active" href="#">Home</a>
      <a class="nav-item nav-link active" href="#" style="position: relative; left: -60px;">Result</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
         <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="#">Features</a>
          <a class="nav-item nav-link" href="#">Pricing</a>
          <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </div>
      </div>
    </nav>

    <div id="bigdiv">
      <div id="" class="container-fluid bg-light text-dark" style="padding-top: 20px;">
        <div id="" class="row justify-content-center align-items-center">
          <form method="POST" action="">
            <div class="form-group">
              <label for="passwcheck">Password</label>
              <div class="row">
                <div class="col-8" style="padding-right:0px !important;">
                  <input name="passwcheck" type="password" class="form-control" id="passwcheck">
                </div>
                <div class="col-4">
                  <button type="passbutton" name="passbutton" class="btn btn-primary" style="width:100%;">EDIT</button>
                </div>

              </div>
              <label for="passwcheck" style="font-size:11px;">Your password is needed to edit data</label>
              <input type="hidden" name="nis" id="idnis" value="<?php echo $nis ?>">
              <br><br><br>
            </div>
          </form>
        </div>
      </div>

      <hr style="border: solid 2px blue;">

      <div id="divformid" class="container-fluid h-100 bg-light text-dark" style="position:relative; top:-70px !important;">
        <div class="justify-content-center align-items-center">
          <h3><i>EDIT DATAMU</i></h3>
        </div>
        <div id="divform" class="row justify-content-center align-items-center">
          <form method="POST" action="">
            <div class="form-group">
              <label for="namasiswa">Nama Lengkap</label>
              <input disabled "nama" style="background-color: #f9f9f9;" type="text" class="form-control" id="nama" style='text-transform:uppercase'>
            </div>
            <div class="form-group">
              <label for="nis">Nomor Induk Siswa</label>
              <input disabled "nis" type="text" class="form-control" id="nis" style='text-transform:uppercase; background-color: #f9f9f9;'>
            </div>
            <div class="row">
              <div class="col-6">
                <div id="selex" class="form-group">
                  <label for="kelas">Pilih Kelas</label>
                  <select "kelas" id="kelas" class="custom-select" style="background-color: #f9f9f9;">
                    <option selected>Password needed</option>
                  </select>
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <label for="nilairpt">Rata2 Rapor</label>
                  <input disabled "nilairpt" type="text" class="form-control" id="nilairpt" style="background-color: #f9f9f9;">
                </div>
              </div>
            </div>



            <div class="row">

                <div class="col-6">
                  <input style="background-color: #f9f9f9;" type="radio" id="klastersanid" name="klaster" value="0" onchange="refreshuniv();"><label for="klaster" >&nbsp;SAINTEK</label>
                </div>
                <div class="col-6">
                  <input style="background-color: #f9f9f9;" type="radio" name="klaster" id="klastersosid" value="1" onchange="refreshuniv();"><label for="klaster">&nbsp;SOSHUM</label>
                </div>

            </div>

            <div id="univdiv" class="form-group">
              <label for="univ">Universitas</label>
              <select style="background-color: #f9f9f9;" name="selectedValue" id="selecan" class="custom-select" onchange="getval(this);">
                <option selected value="Passwordneeded">Password needed</option>


              </select>
            </div>
            <div id="prodidiv" class="form-group">
              <label for="prodi">Kelas</label>
              <select style="background-color: #f9f9f9;" name="prodiselecan" id="prodiselecan" class="custom-select" >
                <option selected value="Passwordneeded">Password needed</option>

              </select>

            </div>
            <button id="submitbutton" onclick="passneed()" class="btn btn-primary">Submit</button>
          </form>

          <p id="passwneedid"></p>

        </div>
      </div>
    </div>

























      <!-- Optional JavaScript -->
      <?php

      echo "<script>

      var bigdiv = document.getElementById('bigdiv');
      function getedit(){
        var nis = document.getElementById('idnis').value;
          var xhr = new XMLHttpRequest();


          xhr.onreadystatechange = function(){
            if( xhr.readyState == 4 && xhr.status == 200){
              bigdiv.innerHTML = xhr.responseText;
            }
          }
          xhr.open('GET', 'ajax/ajax4.php?keyword=' + nis, true);
          xhr.send();
          nopassw();
      }
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

      </script>";


      //cek password auth
      if (isset($_POST["passbutton"])) {
        if (auth($_POST)>0){
          $siswa = mysqli_query($conn, "SELECT * FROM rasio WHERE nis = '$nis'");

          $swa = mysqli_fetch_object($siswa);
          echo "
            <script>
              alert('password cocok!');
              getedit();
            </script>";
        }else{
          echo "
          <script>
            alert('password salah!');
          </script> ";
        }
      }

       ?>

      <script type="text/javascript">


        function passneed(){
          alert('Password dibutuhkan untuk merubah data');
        }

     </script>




      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

      <script src="js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
  </html>
