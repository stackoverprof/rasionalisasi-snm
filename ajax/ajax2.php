<?php

require '../functions.php';
$keyword = $_GET["keyword"];

$siswa = query("SELECT * FROM rasio WHERE juru1 = '$keyword' ORDER BY rerata DESC");


 ?>

 <div class="container">
   <div class="row justify-content-center align-items-center">
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
