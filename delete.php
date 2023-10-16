<?php
    include "database.php";

    $conn = new database();
    $db = $conn->connect();

    if(isset($_GET)){
        // Membuat query untuk menampilkan seluruh data pada tb_mahasiswa
        $sql = "DELETE FROM tb_mahasiswa WHERE IdMahasiswa='$_GET[IdMahasiswa]'";
        
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