<h2>Gaji</h2>

<a href="<?php echo URL; ?>/gaji/input" class="btn">Input Gaji</a>

<table>
      <tr>
            <th>NO</th>
            <th>EMAIL</th>
            <th>FULL NAME</th>
            <th>GAJI</th>
            <th>EDIT</th>
            <th>DELETE</th>
      </tr>

      <?php $no = 1;
      foreach ($data['rows'] as $row) { ?>
            <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['user_email']; ?></td>
                  <td><?php echo $row['user_full_name']; ?></td>
                  <td><?php echo $row['total_gaji']; ?></td>
                  <td><a href="<?php echo URL; ?>/gaji/edit/<?php echo $row['user_id']; ?>" class="btn">Edit</a></td>
                  <td><a href="<?php echo URL; ?>/gaji/delete/<?php echo $row['user_id']; ?>" class="btn" onclick="return confirm('Are you sure?')">Delete</a></td>
            </tr>
      <?php $no++;
      } ?>

</table>