<div id="frame-tambah">
    <a href="<?php echo BASE_URL."index.php?page=my_profile&module=kategori&action=form"; ?>" class="tombol_action">+Tambah Kategori</a>
</div>

<?php

    $queryKategori = mysqli_query($koneksi, "SELECT * FROM kategori");

    if(mysqli_num_rows($queryKategori) == 0) {
        echo "<h3>Saat ini belum ada nama kategori didalam tabel Kategori</h3>";
    }else {
        echo "<table class='table-list'>";
        echo "<tr>
                <th>No</th>
                <th>Kategori</th>
                <th>Status</th>
                <th>Action</th>
            </tr>";

        $no=1;
        while($row=mysqli_fetch_assoc($queryKategori)) {
            echo "<tr>
                    <td>$no</td>
                    <td>$row</td>
                    <td>$row</td>
                    <td>
                        <a class='".BASE_URL."index.php?page=my_profile&module=kategori&action=formkategori_id=$row[kategori_id]>Edit</a>
                    </td>
                </tr>";
        }

        echo"<table/>";
    }
?>