<?php

require '../functions.php';

$universitas= query("SELECT * FROM daftaruniv");


 ?>

 <select name="selectedValue" id="selecan" class="custom-select" onchange="getval(this);">
   <option value="" selected>Pilih Universitas</option>

   <?php foreach ($universitas as $unv) : ?>
     <option value="<?=($unv->univ);?>" ><?=($unv->univ); ?></option>

     <?php endforeach; ?>

 </select>
