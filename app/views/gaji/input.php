<h2>Input Gaji</h2>

<form action="<?php echo URL; ?>/gaji/save" method="post">
    <table>
        <tr>
            <td>EMAIL</td>
            <td><input type="email" name="user_email" required></td>
        </tr>
        <tr>
            <td>FULL NAME</td>
            <td><input type="text" name="user_full_name" required></td>
        </tr>
        <tr>
            <td>GAJI</td>
            <td><input type="text" name="total_gaji" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_save" value="SAVE"></td>
        </tr>
    </table>
</form>