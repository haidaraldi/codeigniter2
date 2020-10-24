<!DOCTYPE html>
<html>

<head>
    <title>Tampil Data </title>
</head>

<body>

    <h1>Tampil Data</h1>
    <table style="margin:20px auto; border: 1">
        <tr>
            <th>No</th>
            <th>ID Barang</th>
            <th>Nama Barang</th>
            <th>Jumlah</th>
            <th>Merk</th>
        </tr>
        <?php
        $no = 1;
        foreach ($tbl_barang as $u) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $u->Id ?></td>
                <td><?php echo $u->nm_brg ?></td>
                <td><?php echo $u->jml ?></td>
                <td><?php echo $u->merk ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>