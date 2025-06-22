<?php

include "koneksi.php";
if (isset($_POST['submit'])) {
   $nm_member = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $tgl_lahir = $_POST['date'];
   

    $input = "INSERT INTO tb_member (nm_member, email, password, tgl_lahir) VALUES ('$nm_member','$email','$password','$tgl_lahir')";
    $query_input = mysqli_query($Open,$input);
   if ($query_input) {
    //Jika Berhasil
        echo "<script>
                alert('Input Data Berhasil');
                window.location.href = 'index.php';
              </script>";

    } else {
        //Jika Gagal
        echo "Input Data Gagal!, Silahkan diulangi! <br>" . mysqli_error($Open);
    }
}

?>

