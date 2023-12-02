<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Nilai Mahasiswa</title>
</head>
<body>

    <form method="POST" action="">
        <label for="Nama">Nama :</label>
        <input type="text" id="Nama" name="Nama" required> <br>
        <label for="Agama">Agama:</label>
        <input type="text" id="Agama" name="Agama" required> <br>
        <label for="Jabatan">Jabatan:</label>
        <select name="Jabatan"> <br>
                <option value="Manajer">Manajer</option>
                <option value="Asisten">Asisten</option>
                <option value="Kabag">Kabag</option>
                <option value="Staff">Staff</option>
            </select> <br>
            <select id="status" name="status" required>
            <option value="Belum Nikah">Belum Nikah</option>
            <option value="Sudah Nikah">Sudah Nikah</option>
        </select>
        <input type="submit" name="tombol" value="Submit">
    </form>
    <?php
     if (isset($_POST['tombol'])) {
        $Nama = $_POST['Nama'];
        $Agama = $_POST['Agama'];
        $Jabatan = $_POST['Jabatan'];
        $status = $_POST['status'];
        $jumlah_anak = ($status === 'Sudah Nikah') ? 4 : 0;

        echo "<br>Nama: $Nama<br>";
        echo "Agama: $Agama<br>";
        echo "Jabatan: $Jabatan<br>";
        echo "status: $status<br>";
        if ($status === 'Sudah Nikah') {
            echo "<p>Jumlah Anak: $jumlah_anak</p>";
        }
     }
        ?>
</body>
</div>
</html>
