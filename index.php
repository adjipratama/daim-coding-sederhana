<!DOCTYPE html>

<?php
    include "database.php";

    $conn = new database();
    $db = $conn->connect();

    // Membuat query untuk menampilkan seluruh data pada tb_mahasiswa
    $sql = "SELECT * FROM tb_mahasiswa";

    // Eksekusi query
    $result = $db->query($sql);
?>

<html>
    <body>
        <!-- Cek Jumlah Data -->
        <?php if($result->num_rows > 0): ?>

            <button onclick="document.location='create_form.php'">Tambah Data</button></br></br>

            <!-- Tabel data -->
            <table border="1" style="border-collapse: collapse;">
                <tr>
                    <th>Id Mahasiswa</th>
                    <th>Nama Mahasiswa</th>
                    <th>Umur</th>
                    <th>Jurusan</th>
                    <th></th>
                </tr>

                <!-- Menampilkan data yang ada pada tabel -->
                <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row["IdMahasiswa"] ?></td>
                        <td><?php echo $row["NamaMahasiswa"] ?></td>
                        <td><?php echo $row["Umur"] ?></td>
                        <td><?php echo $row["Jurusan"] ?></td>
                        <td>
                            <button onclick="document.location='update_form.php?IdMahasiswa=<?php echo $row['IdMahasiswa'] ?>'">Edit</button> 
                            <button onclick="if(confirm('Are you sure?')){ return document.location='delete.php?IdMahasiswa=<?php echo $row['IdMahasiswa'] ?>' }">Hapus</button>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </table>

        <?php
            else:
                // Jika data kosong
                echo "data kosong";
            endif;
        ?>
    </body>
</html>
