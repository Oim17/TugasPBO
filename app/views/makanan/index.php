<h2>baju</h2>

<a href="<?php echo URL; ?>/makanan/input" class="btn">Input makanan</a>

<table>
      <tr>
            <th>NO</th>
            <th>Nama</th>
            <th>Jenis</th>
            <th>Harga</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['nama']; ?></td>
                  <td><?php echo $row['jenis']; ?></td>
                  <td><?php echo $row['harga']; ?></td>
                  <td><a href="<?php echo URL; ?>/makanan/edit/<?php echo $row['id']; ?>" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/makanan/delete/<?php echo $row['id']; ?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a></td>
            </tr>
      <?php $no++;
      } ?>

</table>