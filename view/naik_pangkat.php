<?php
    require "notif.php";
    $data = $class_pangkat->all();
?>
<h3>Input data baru</h3>
<form action="view/input_aksi.php" method="post">
    <div class="form-group">
        <label>Nama Barang</label>
        <input class="form-control" name="nama" type="text" placeholder="Nama Barang">
    </div>

    <div class="form-group">
        <label>Tanggal Jatuh Tempo</label>
        <input class="form-control" type="date" name="tempo">
    </div class="form-group">

    <div class="form-group">
        <button type="submit" class="btn btn-primary" name="add">Submit</button>
    </div>
</form>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <b class="text-center"> DAFTAR NAMA BARANG TAGIHAN</b>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Barang</th>
                            <th>Nama</th>
                            <th>Tanggal Jatuh Tempo Tagihan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $no = 1;
                            foreach ($data as $d){
                                echo '
                                <tr class="odd gradeX">
                                    <td>'.$no.'</td>
                                    <td>'.$d['kode_barang'].'</td>
                                    <td>'.$d['nama_barang'].'</td>
                                    <td>'.$d['jatuh_tempo'].'</td>
                                    <td><a class="btn btn-danger" href="view/delete.php?id='.$d['id'].'">Hapus</a></td>
                                </tr>';
                                $no++;
                            }
                        ?>
                    </tbody>

                </table>

            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>