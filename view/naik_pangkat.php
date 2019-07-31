<?php
    $data = $class_pangkat->dataNaik();
?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"></h1>
    </div>
    <!-- /.col-lg-12 -->
</div>


<h3>Input data baru</h3>
	<form action="view/input_aksi.php" method="post">		
		<table>
			<tr>
				<td>Nama Barang</td>
				<td><input class="form-control" type="text" placeholder="masukkan daftar tagihan"></td>			
			</tr>	
			<tr>
				<td>Tanggal Jatuh Tempo</td>
                <td><input class="form-control" type="date" name="tempo "placeholder="masukkan tanggal"></td>			
					
			</tr>	
			
			<tr>
</br>
                <td></td>
               <td> <button type="submit" class="btn btn-primary btn-sm">Submit</button></td>
				
			</tr>				
		</table>
    </form>
</br>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
               <center><b> DAFTAR NAMA BARANG TAGIHAN</b></center>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Barang</th>
                            <th>nip</th>
                            <th></th>
                            <th>Tanggal Jatuh Tempo Tagihan</th>
                            <th>Jatuh Tempo Dalam (hari)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $no = 2;
                            foreach ($data as $d){
                                echo '
                                <tr class="odd gradeX">
                                    <td>'.$no.'</td>
                                    <td>'.$d['nama'].'</td>
                                    <td>'.$d['nip'].'</td>
                                    <td>'.$d['tgl_pangkat1'].'</td>
                                    <td>'.$d['tgl_pangkat2'].'</td>
                                    <td>'.$d['selisih'].' hari</td>
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
