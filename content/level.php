<?php
$level = mysqli_query($koneksi, "SELECT * FROM level ORDER BY id DESC");
?>
<div class="wrapper">
    <div class="container mt-5">
        <div class="row">
            <div col-sm-12>
                <fieldset class="border border-2 p-3" style="border-width: 2px; border-color: black; border-style: solid;">
                    <legend class="float-none w-auto px-3">Data Level</legend>
                    <div align="right">
                        <a href="?pg=tambah_lvl" class="btn btn-success"><i class="fa-solid fa-square-plus"></i> ADD</a>
                        <a href="index.php" class="btn btn-success"><i class="fa-solid fa-recycle"></i> RECYCLE</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered text-center table-striped table-hovered" style="margin-top:15px;margin-left:17px; width:96%; background: #E6E6FA;">
                            <thead>
                                <tr>
                                    <th>No <i class="fa-solid fa-sort ms-6"></i></th>
                                    <th>Level<i class="fa-solid fa-sort"></i></i></th>
                                    <th>Aksi<i class="fa-solid fa-sort"></i></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                while ($rowLvl = mysqli_fetch_assoc($level)): ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $rowLvl['nama_level'] ?></td>
                                        <td>| <a href="?pg=tambah_lvl&edit=<?php echo $rowLvl['id'] ?>"><span class="fa-solid fa-pencil"></span></a> | | <a href="?pg=tambah_lvl&delete=<?php echo $rowLvl['id'] ?>" onclick="return confirm('Apakah anda yakin akan menghapus data ini??')"><span class="fa-regular fa-trash-can"></span> |</a></td>
                                    </tr>
                                <?php endwhile ?>
                            </tbody>
                        </table>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
</div>