<?php
     $host ="localhost";
     $user = "root";
     $pass = "";
     $nama_db ="crud.gc"; //nama database
     $koneksi = mysqli_connect($host,$user,$pass,$nama_db);//pastikan urutannya seperti ini, jangan tertukar

     if(!$koneksi){ //jika tidak terkoneksi maka akan tampil error
        die ("Koneksi dengan database gagal: ".mysql_connect_error());
     }
?>