<!DOCTYPE html>

<?php
    include "database.php";

    $conn = new database();
    $db = $conn->connect();

    // Membuat query untuk menampilkan seluruh data pada tb_mahasiswa
    $sql = "SELECT * FROM tb_mahasiswa WHERE IdMahasiswa='$_GET[IdMahasiswa]'";

    // Eksekusi query
    $result = $db->query($sql);
    $data = $result->fetch_assoc();
?>

<html>
    <body>

    <h2>Update Data Mahasiswa</h2>

    <!-- FORM UPDATE DATA -->
    <form action="update.php" method="POST" >

    <label>ID Mahasiswa :</label><br>
    <input type="text" name="IdMahasiswa" value="<?php echo $data['IdMahasiswa']?>" readonly><br><br>

    <label>Nama Mahasiswa :</label><br>
    <input type="text" name="NamaMahasiswa" value="<?php echo $data['NamaMahasiswa']?>"><br><br>

    <label>Umur :</label><br>
    <input type="number" name="Umur" value="<?php echo $data['Umur']?>"><br><br>

    <label>Jurusan :</label><br>
    <input type="text" name="Jurusan" value="<?php echo $data['Jurusan']?>"><br><br>

    <input type="submit" value="Submit">
    </form> 

    </body>
</html>
