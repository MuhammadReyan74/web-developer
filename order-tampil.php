<h2>Tampil Data Pesanan</h2>
    <a href="order-input.php">Input</a>
    <!-- <a href="index.php?page=order-input" class="btn-hapus"><i class="fa fa-trash"></i></a> -->
    
    <?php

        require_once "koneksi.php";
        
        $sql = "SELECT * FROM tb_order";
        $stmt = $koneksi->prepare($sql);
        $stmt->execute();

        //jadikan dalam variabel array
        $rows = $stmt->fetchAll();
    ?>

    <table class="table-order">
        <tr class="table-tittle">
            <td>NO</td>
            <td>NAMA</td>
            <td>NO HP</td>
            <td>PAKET</td>
            <td>TAMBAHAN</td>
            <td>AKSI</td>
        </tr>

        <?php foreach ($rows as $r) { ?>
            <tr>
                <td><?php echo $r['order_id']; ?></td>
                <td><?php echo $r['order_nama']; ?></td>
                <td><?php echo $r['order_hp']; ?></td>
                <td><?php echo $r['order_paket']; ?></td>
                <td><?php echo $r['order_tambahan']; ?></td>
                <td>
                    <button class="btn-hapus"><i class="fa fa-trash"></i></button>
                    <button class="btn-edit"><i class="fa fa-edit"></i></button>
                </td>
            </tr>
        <?php } ?>
    </table>
