<?php 
    $jumlahdata = $db -> rowCOUNT("SELECT idorder FROM vorder");
    $banyak = 2;
    $halaman = ceil($jumlahdata / $banyak);

    if (isset($_GET['p'])) {
        $p=$_GET['p'];
        $mulai = ($p * $banyak) - $banyak;
    }else {
         $mulai = 0;
    }

    $sql = "SELECT * FROM vorder ORDER BY status,idorder ASC LIMIT $mulai, $banyak";
    $row = $db->getALL($sql);
    $no = 1 + $mulai;

?>

<h3>ORDER PAYMENT</h3>

<table class="table table-bordered w-70">

    <thead>
        <tr>
            <th>Number</th>
            <th>Costumer</th>
            <th>Date</th>
            <th>Total</th>
            <th>Pay</th>
            <th>Back</th>
            <th>Status</th>
        </tr>
    </thead>

    <tbody>
        <?php if (!empty($row)){ ?>
        <?php foreach($row as $r): ?>
            <?php 
                if ($r['status']==0) {
                    $status = '<td><a href="?f=order&m=bayar&id='.$r['idorder'].'">Pay</a></td>';
                }else {
                    $status = '<td>Paid Off</td>';
                }
            ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $r['pelanggan'] ?></td>
                <td><?= $r['tglorder'] ?></td>
                <td><?= "Rp. ".$r['total'] . ",00" ?></td>
                <td><?= $r['bayar'] ?></td>
                <td><?= $r['kembali'] ?></td>
                <?=$status?>
            </tr>
        <?php endforeach ?>
        <?php } ?>
    </tbody>
</table>


<?php 

    for ($i=1; $i <= $halaman ; $i++) { 
        echo '<a href="?f=order&m=select&p='.$i.'">'.$i.'</a>'.'&nbsp &nbsp &nbsp';
    };
    echo '<br> <br>';

?>