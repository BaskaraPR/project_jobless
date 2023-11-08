<?php 
    include "header.php";
?>
<h2>Are you sure??</h2>
<table class="table table-hover striped">
    <thead>
        <tr>
            <th>NO</th><th>Job</th><th>Revenue</th><th>Cancel</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach (@$_SESSION['info'] as $key_produk => $val_produk): ?>
            <tr>
                <td><?=($key_produk+1)?></td><td><?=$val_produk['namajob']?></td><td><?=$val_produk['gaji']?></td><td><a href="resign.php?id=<?=$key_produk?>" class="btn btn-danger"><strong>resign</strong></a></td>
            </tr>

        <?php endforeach ?>
    </tbody>
</table>

<a href="applyConfirm.php" class="btn btn-primary">Confirm</a>