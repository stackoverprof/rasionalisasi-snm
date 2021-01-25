<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php
    $conn = mysqli_connect("localhost","root", "", "rasiosnm");

    if (isset($_POST["submit"])) {
      global $conn;
       $password = $_POST["passw"];
       $password = password_hash($password, PASSWORD_DEFAULT);
       print_r($password);
    };

    // function tambah($data){
    //   global $conn;
    //   //ngambil masing masing data dr form
    //
    //   $password = htmlspecialchars($data["passw"]);
    //   $nis = htmlspecialchars($data["nis"]);
    //
    //
    //    password_hash ($password, PASSWORD_DEFAULT);
    //
    //     //query insert Data
    //     $query = "UPDATE table_name
    //               SET password = '$password'
    //               WHERE nis = '$nis'; ";
    //     mysqli_query($conn, $query);
    //
    //     return mysqli_affected_rows($conn);
    // }
    // ?>



    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="form-group">
      <form class="" action="" method="post">
        <label for="passw">Password</label>

        <input name="passw" type="text" class="form-control" id="passw">
      <button type="submit" name="submit" class="btn btn-primary">Submit</button>

      </form>

    </div>
  </body>
</html>
