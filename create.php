<?php
    include "database.php";

    $conn = new database();
    $db = $conn->connect();

    if(isset($_POST)){
        // Membuat query untuk menampilkan seluruh data pada tb_mahasiswa
        $sql = "INSERT INTO tb_mahasiswa VALUES('$_POST[IdMahasiswa]', '$_POST[NamaMahasiswa]', '$_POST[Umur]', '$_POST[Jurusan]')";
        
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