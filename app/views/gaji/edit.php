<h2>Edit Gaji</h2>

<form action="<?php echo URL; ?>/gaji/update" method="post">
    <input type="hidden" name="id" value="<?php echo $data['row']['user_id']; ?>">
    <table>
        <tr>
            <td>EMAIL</td>
            <td><input type="email" name="user_email" value="<?php echo $data['row']['user_email']; ?>" required></td>
        </tr>
        <tr>
            <td>FULL NAME</td>
            <td><input type="text" name="user_full_name" value="<?php echo $data['row']['user_full_name']; ?>" required></td>
        </tr>
        <tr>
            <td>TOTAL GAJI</td>
            <td><input type="text" name="total_gaji" value="<?php echo $data['row']['total_gaji']; ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>