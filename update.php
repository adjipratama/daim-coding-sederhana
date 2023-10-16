<?php
    include "database.php";

    $conn = new database();
    $db = $conn->connect();

    if(isset($_POST)){
        // Membuat query untuk menampilkan seluruh data pada tb_mahasiswa
        $sql = "UPDATE tb_mahasiswa SET NamaMahasiswa='$_POST[NamaMahasiswa]', Umur='$_POST[Umur]', Jurusan='$_POST[Jurusan]' WHERE IdMahasiswa='$_POST[IdMahasiswa]'";

        // Eksekusi SQL
        if($db->query($sql) === TRUE) {
            // Insert data berhasil & mengalihkan ke index.php
            header("Location: index.php");
        }else{
            // Insert data gagal & menampilkan error
            echo "Error: " . $sql . "<br>" . $db->error;
        }
          
        $db->close();
    }
?>