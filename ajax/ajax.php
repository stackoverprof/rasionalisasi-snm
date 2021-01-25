<?php

require '../functions.php';
$keyword = $_GET["keyword"];
$boolklas = $_GET["boolklas"];

$prodi = query("SELECT * FROM univprodi WHERE univ = '$keyword' AND klaster = '$boolklas'");


 ?>

 <div id="prodidiv" class="form-group">
   <label for="prodi">Kelas</label>

   <select onchange="getvale(this);" id="prodiselecan" name="prodiselecan" class="custom-select">
     <option id="defaultopt" selected>Pilih Prodi</option>
     <?php foreach ($prodi as $prd) : ?>
       <option value="<?=($prd->prodi); ?>" ><?=($prd->prodi); ?></option>
     <?php endforeach; ?>

   </select>
 </div>
