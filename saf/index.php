<body>

<h2>Data Karyawan</h2>

<style>
        th, td {
            border: 1px solid black;
            padding: 8px;
        }
        
</style>

<table>
    <tr>
        <th width="50">NO</th>
        <th width="100">No. Induk</th>
        <th width="150">Nama Karyawan</th>
        <th width="120">Jabatan</th>
        <th width="100">Gaji Pokok</th>
        <th width="100">Tunjangan</th>
    </tr>

    <?php
    include "koneksi.php";

    $no = 1;
    $query = "SELECT karyawan.no_induk, karyawan.nama, jabatan.nama_jab, jabatan.gaji_pokok, jabatan.tunjangan 
              FROM karyawan 
              JOIN jabatan ON karyawan.id_jab = jabatan.id_jab";

    $ambildata = mysqli_query($conn, $query) or die(mysqli_error($conn));

    while($tampil = mysqli_fetch_array($ambildata)) {
        echo "
        <tr>
           <td align='center'>$no</td>
           <td align='center'>$tampil[no_induk]</td>
           <td>$tampil[nama]</td>
           <td align='center'>$tampil[nama_jab]</td>
           <td align='center'>$tampil[gaji_pokok]</td>
           <td align='center'>$tampil[tunjangan]</td>
        </tr>
        ";
        $no++;
    }
    ?>

</table>

</body>
</html>
