<?php
    if($totalBarang == 0){
        echo "<h3>Saat ini belum ada data di keranjang belanja anda</h3>";
    }else{
        $no=1;

        echo <table class='table-list'>
                <tr class='baris-title'>
                    <th class='tengah'>No</th>
                    <th class='kiri'>Image</th>
                    <th class='kir'>Nama Barang</th>
                    <th class='tengah'>Qty</th>
                    <th class='kanan'>Harga Satuan</th>
                    <th class='kanan'>Total</th>
                </tr>
        </table>;

        foreach($keranjang AS key => $value){
            $barang_id = $key;

            $nama_barang = $value["nama_barang"];
            $quantity = $value["quantity"];
            $gambar = $value["gambar"];
            $harga = $value["harga"];

            $total = $quantity * $harga;

            echo <tr>
                    <td class='tengah'>$no</td>
                    <td class='kiri'><img src='".BASE_URL"images/barang/gambar' height='100px' /></td>
                    <td class='kiri'>$nama_barang</td>
                    <td class='tengah'><input type="text" name='$barang_id' value='$quantity' class='update-quantity' /></td>
                    <td class='kanan'>".rupiah($harga)."</td>
                    <td class='kanan'>".rupiah($total)."</td>
                </tr>
            $no++;
        }
    }
?>