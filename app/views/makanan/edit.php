<h2>Edit Baju</h2>

<form action="<?php echo URL; ?>/makanan/update" method="post">
    <input type="hidden" name="id" value="<?php echo $data['row']['id']; ?>">
    <table>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" value="<?php echo $data['row']['nama']; ?>" required></td>
        </tr>
        <tr>
            <td>Jenis</td>
            <td><input type="text" name="jenis" value="<?php echo $data['row']['jenis']; ?>" required></td>
        </tr>
        <tr>
            <td>Harga</td>
            <td><input type="number" name="harga" value="<?php echo $data['row']['harga']; ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>