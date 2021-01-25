<?php

require '../functions.php';
$nis = $_GET["keyword"];

$siswa = mysqli_query($conn, "SELECT * FROM rasio WHERE nis = '$nis'");

$swa = mysqli_fetch_object($siswa);


$universitas= query("SELECT * FROM daftaruniv");
$prodi= query("SELECT * FROM univprodi");


 ?>


<div id="divformid" class="container-fluid h-100 bg-light text-dark">
  <div class="" id="semibigdiv">
    <div class="justify-content-center align-items-center">
      <h3><i>EDIT DATAMU</i></h3>
    </div>
    <div id="divform" class="row justify-content-center align-items-center">
      <form method="POST" action="">
        <div class="form-group">
          <label for="namasiswa">Nama Lengkap</label>
          <input name="nama" type="text" class="form-control" id="nama" style='text-transform:uppercase' value="<?=($swa->nama);?>">
        </div>
        <div class="form-group">
          <label for="nis">Nomor Induk Siswa</label>
          <input name="nis" type="text" class="form-control" id="nis" style='text-transform:uppercase' value="<?=($swa->nis);?>">
        </div>
        <div class="row">
          <div class="col-6">
            <div id="selex" class="form-group">
              <label for="kelas">Pilih Kelas</label>
              <select name="kelas" id="kelas" class="custom-select">
                <option selected value="<?=($swa->kelas);?>"><?=($swa->kelas);?></option>
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
              <input name="nilairpt" type="text" class="form-control" id="nilairpt" value="<?=($swa->rerata);?>">
            </div>
          </div>
        </div>

        <div class="form-group">
          <label for="passw">Password</label>
          <input name="passw" type="text" class="form-control" id="passw" placeholder="change password">
          <label for="passw" style="font-size: 10px !important;">[optional] type if only you want to change your password</label>

        </div>
    </div>
  </div>

      <div class="row">
        <?php if (($swa->klaster)==0): ?>
          <div class="col-6">
            <input checked type="radio" id="klastersanid" name="klaster" value="0" onchange="refreshuniv();"><label for="klaster" >&nbsp;SAINTEK</label>
          </div>
          <div class="col-6">
            <input type="radio" name="klaster" id="klastersosid" value="1" onchange="refreshuniv();"><label for="klaster">&nbsp;SOSHUM</label>
          </div>
        <?php else : ?>
          <div class="col-6">
            <input type="radio" id="klastersanid" name="klaster" value="0" onchange="refreshuniv();"><label for="klaster" >&nbsp;SAINTEK</label>
          </div>
          <div class="col-6">
            <input checked type="radio" name="klaster" id="klastersosid" value="1" onchange="refreshuniv();"><label for="klaster">&nbsp;SOSHUM</label>
          </div>
        <?php endif; ?>

      </div>

      <div id="univdiv" class="form-group">
        <label for="univ">Universitas</label>
        <select name="selectedValue" id="selecan" class="custom-select" onchange="getval(this);">
          <option selected value="<?=($swa->univ1);?>"><?=($swa->univ1);?></option>

          <?php foreach ($universitas as $unv) : ?>
            <option value="<?=($unv->univ);?>" ><?=($unv->univ); ?></option>

            <?php endforeach; ?>

        </select>
      </div>
      <div id="prodidiv" class="form-group">
        <label for="prodi">Kelas</label>
        <select name="prodiselecan" id="prodiselecan" class="custom-select" >
          <option selected value="<?=($swa->juru1);?>"><?=($swa->juru1);?></option>
          <?php foreach ($prodi as $prd) : ?>
            <option value="<?=($prd->prodi); ?>"><?=($prd->prodi); ?></option>
          <?php endforeach; ?>
        </select>

      </div>
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>


  </div>

<script type="text/javascript">

</script>
