<!DOCTYPE html>
<html>

<head>
    <title>Tampil Data Pengguna/title>
</head>

<body>

    <h1>Tampil Data</h1>
    <table style="margin:20px auto; border: 1">
        <tr>
            <th>No</th>
            <th>ID Departemen</th>
            <th>ID Barang</th>
            <th>Pengguna</th>
        </tr>
        <?php
        $no = 1;
        foreach ($tbl_pengguna as $u) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $u->Id_dep ?></td>
                <td><?php echo $u->Id_brg ?></td>
                <td><?php echo $u->pengguna ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>