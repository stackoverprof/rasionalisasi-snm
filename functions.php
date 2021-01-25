<?php
  //koneksi ke database
  $conn = mysqli_connect("localhost","root", "", "rasiosnm");

  function query($query)  {
    global $conn;

    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_object($result)){
      $rows[]=$row;
    }
    return $rows;
  }


  function filter($keyword){
    $query = "SELECT * FROM univprodi WHERE univ = '$keyword'";

    return query($query);
  }


  function tambah($data){
    global $conn;
    //ngambil masing masing data dr form
    $nama = htmlspecialchars($data["nama"]);
    $nis = htmlspecialchars($data["nis"]);
    $kelas = htmlspecialchars($data["kelas"]);
    $nilairpt = htmlspecialchars($data["nilairpt"]);
    $password = htmlspecialchars($data["passw"]);
    $selecan = htmlspecialchars($data["selectedValue"]);
    $prodiselecan = htmlspecialchars($data["prodiselecan"]);
    $klaster = htmlspecialchars($data["klaster"]);

     $password = password_hash ($password, PASSWORD_DEFAULT);
      //query insert Data
      $query = "INSERT INTO rasio
                VALUES
                ('', upper('$nama'), '$nis', '$password', '$kelas', '$nilairpt', '$klaster', '$selecan', '$prodiselecan')";
      mysqli_query($conn, $query);

      return mysqli_affected_rows($conn);
  }

  function auth($data){

    global $conn;

    $nis = htmlspecialchars($data["nis"]);
    $password =  htmlspecialchars($data["passwcheck"]);

    $siswa = mysqli_query($conn, "SELECT password FROM rasio WHERE nis='$nis'");
    $swa = mysqli_fetch_object($siswa);
     if (password_verify($password, ($swa->password))) {
                return mysqli_affected_rows($conn);
      }else{
        return '0';

      }

  }

  function edit($data){
    global $conn;
    //ngambil masing masing data dr form
    $nama = htmlspecialchars($data["nama"]);
    $nis = htmlspecialchars($data["nis"]);
    $nisbefore = $nis;
    $kelas = htmlspecialchars($data["kelas"]);
    $nilairpt = htmlspecialchars($data["nilairpt"]);

    $selecan = htmlspecialchars($data["selectedValue"]);
    $prodiselecan = htmlspecialchars($data["prodiselecan"]);
    $klaster = htmlspecialchars($data["klaster"]);

    if (($password = htmlspecialchars($data["passw"])) != null) {
    $password = htmlspecialchars($data["passw"]);
    $password = password_hash ($password, PASSWORD_DEFAULT);

    }
    if ($password=='') {
      //query insert Data
      $query = "UPDATE rasio SET
        nama = '$nama',
        nis = '$nis',
        Kelas = '$kelas',
        rerata = '$nilairpt',
        klaster = '$klaster',
        univ1 = '$selecan',
        juru1 = '$prodiselecan'
       WHERE nis = '$nisbefore'";

    }else{
      //query insert Data
      $query = "UPDATE rasio SET
        nama = '$nama',
        nis = '$nis',
        password = '$password',
        Kelas = '$kelas',
        rerata = '$nilairpt',
        klaster = '$klaster',
        univ1 = '$selecan',
        juru1 = '$prodiselecan'
       WHERE nis = '$nisbefore'";
     }

      mysqli_query($conn, $query);

      return mysqli_affected_rows($conn);
  }


 ?>
