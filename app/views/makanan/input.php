<h2>Input Baju</h2>

<form action="<?php echo URL; ?>/makanan/save" method="post">
    <table>
        <tr>
            <td>nama</td>
            <td><input type="text" name="nama" required></td>
        </tr>
        <tr>
            <td>jenis</td>
            <td><input type="text" name="jenis" required></td>
        </tr>
        <tr>
            <td>harga</td>
            <td><input type="number" name="harga" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>