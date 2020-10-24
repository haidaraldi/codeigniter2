<!DOCTYPE html>
<html>

<head>
    <title>Tampil Data Department</title>
</head>

<body>

    <h1>Tampil Data</h1>
    <table style="margin:20px auto; border: 1">
        <tr>
            <th>No</th>
            <th>ID Barang</th>
            <th>Nama Departemen</th>
        </tr>
        <?php
        $no = 1;
        foreach ($tbl_departemen as $u) {
        ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $u->Id ?></td>
                <td><?php echo $u->nm_dep ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>