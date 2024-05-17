<?php 
include "connection.php";
?>
<table class="data">
    <tr>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Pekerjaan</th>
    </tr>
    <?php
    $data = $db->query("select * from user");
    while ($d = mysqli_fetch_array($data)) {
        ?>
        <tr>
            <td><?php echo $d['nama'] ?></td>
            <td><?php echo $d['alamat'] ?></td>
            <td><?php echo $d['pekerjaan'] ?></td>
        </tr>
    <?php } ?>
</table>