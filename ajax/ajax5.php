<?php

require '../functions.php';

$universitas= query("SELECT * FROM daftaruniv");


 ?>
 <div id="prodidiv" class="form-group">
   <label for="prodi">Kelas</label>
  <select onchange="getvale(this);" name="prodiselecan" id="prodiselecan" class="custom-select" >
    <option selected>Pilih Prodi</option>
    <?php foreach ($prodi as $prd) : ?>
      <option value="<?=($prd->prodi); ?>"><?=($prd->prodi); ?></option>
    <?php endforeach; ?>
  </select>
</div>
