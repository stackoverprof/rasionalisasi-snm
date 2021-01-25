<?php
require 'functions.php';
$siswa = query("SELECT * FROM rasio ORDER BY rerata DESC");
$universitas= query("SELECT * FROM `daftaruniv`");
$prodi= query("SELECT * FROM `univprodi`");

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
    <link href="https://fonts.googleapis.com/css?family=Patua+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Biryani:400,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://netdna.bootstrapcdn.com/font-awesome/55.2.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,700i,900,900i&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <link rel="stylesheet" href="style.css">


    <title>Rasionalisasi SNM SMAGA</title>
  </head>
  <body>
    <div style="padding-left:20px;" class="bg-light text-align-left justify-content-left align-items-left">
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
         <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="#">Pricing</a>
          <a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </div>
      </div>
    </nav>






  <div class="container-fluid utamatabel bg-light">

    <div class="container-fluid h-100 bg-light text-dark">
      <div class="row justify-content-center align-items-center">
        <h3>SMA Negeri 3 Semarang</h3>
      </div>
      <hr>
    </div>



  <div class="row justify-content-center align-items-center">

    <form class="" action="index.html" method="post">
      <div class="row">
        <div class="col-2">

        </div>
        <div class="col-4">
          <input type="radio" id="klastersanid" name="klaster" value="0" onchange="refreshuniv();refreshprodi();"><label for="klaster">&nbsp;SAINTEK</label>
        </div>
        <div class="col-4">
          <input type="radio" name="klaster" id="klastersosid" value="1" onchange="refreshuniv();refreshprodi();"><label for="klaster">&nbsp;SOSHUM</label>
        </div>
        <div class="col-2">

        </div>
      </div>
      <br>
      <div style="padding:0 20px !important;"id="univdiv" class="form-group">
        <label for="univ">Universitas</label>
        <select name="selectedValue" id="selecan" class="custom-select" onchange="getval(this);">
          <option value="" selected>Pilih Universitas</option>

          <?php foreach ($universitas as $unv) : ?>
            <option value="<?=($unv->univ);?>" ><?=($unv->univ); ?></option>

            <?php endforeach; ?>

        </select>
      </div>

      <div id="prodidiv" style="padding:0 20px !important;" class="form-group">
        <label for="prodi">Kelas</label>

        <select name="prodiselecan" id="prodiselecan" class="custom-select" onchange="getvale(this);">

          <option selected>Pilih Prodi</option>
          <?php foreach ($prodi as $prd) : ?>
            <option value="<?=($prd->prodi); ?>"><?=($prd->prodi); ?></option>
          <?php endforeach; ?>

        </select>
      </div>
    </form>
  </div>


<div class="container">
  <div class="justify-content-center align-items-center">
    <div id="divtable" >
      <table id="tabelrank" class="table">
        <col width="8%">
        <col width="57%">
        <col width="17%">
        <col width="18%">
      <thead id="thead" class="thead-dark">
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama</th>
        <th scope="col">Nilai</th>
        <th scope="col">Detail</th>
      </tr>
      </thead>
      <tbody>
        <?php $i=1; ?>
        <?php foreach ($siswa as $swa) : ?>
          <?php
          // $namaexploded = explode(" ",($swa->nama));
          //
          // //looping { }
          // $namaoutput = substr($namaexploded, 0, 1) + 'ngitung output bintang' ;
          //  ?>






            <tr>
              <td><?php echo($i); ?></td>
              <td><?=($swa->nama); ?></td>
              <td><?=($swa->rerata); ?></td>

              <td><button id="moreless" type="submit" name="submit" value="<?=($swa->nis); ?>" onclick="getmore(this); onclickchange();" class="btn btn-primary"> more &#x25BC;</button></td>

            </tr>

            <script type="text/javascript">

              function onclickchange(){
                  document.getElementById('moreless').setAttribute( "onClick", "getless(this); onchangeclick();" );
                  document.getElementById('moreless').innerHTML = "less &#x25B2;";
                }
                function onchangeclick(){
                    document.getElementById('moreless').setAttribute( "onClick", "getmore(this); onclickchange();" );
                    document.getElementById('moreless').innerHTML = "more &#x25BC;";
                  }
            </script>

            <tr id="<?=($swa->nis); ?>" style="display:none;">
              <td></td>
              <td><?=($swa->nis); ?></td>
              <td>XII <?=($swa->kelas); ?></td>
              <td><a href="edit.php?nis=<?=($swa->nis); ?>"class="btn btn-primary" style="background-color:rgba(0,0,0,0); color: gray; border: solid 2px gray;">edit</a></td>
            </tr>








        <?php $i++ ?>
      <?php endforeach; ?>
      </tbody>
      </table>



    </div>

  </div>

</div>
</div>












<!-- Optional JavaScript -->
<script type="text/javascript">
var selecan = document.getElementById('selecan');
var prodiselecan = document.getElementById('prodidiv');
var tabel = document.getElementById('tabelrank');
var morediv = document.getElementById('morediv<?=($swa->nama); ?>');

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


function getvale(sel){
var selectedVal = sel.value;
  var xhr = new XMLHttpRequest();

  xhr.onreadystatechange = function(){
    if( xhr.readyState == 4 && xhr.status == 200){
      tabel.innerHTML = xhr.responseText;
    }
  }
  xhr.open('GET', 'ajax/ajax2.php?keyword=' + selectedVal, true);
  xhr.send();
}

function getmore(sel){
  var selectedVal = sel.value;
  document.getElementById(selectedVal).style.display ="table-row";
}
function getless(sel){
  var selectedVal = sel.value;
  document.getElementById(selectedVal).style.display ="none";
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
