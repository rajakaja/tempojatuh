<?php
    
    $jumlah = $class_pangkat->jumlahNaik();
?>

<div class="row">
    <div class="col-lg-12">
       <center> <h1 class="page-header">PT TASPEN ( PERSERO )</h1></center>
    </div>
    <!-- /.col-lg-12 -->
</div>


<!-- /.row -->
<div class="row">
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-user fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge"><?php echo $jumlah; ?></div>
                        <div>NAMA BARANG</div>
                    </div>
                </div>
            </div>
            <a href="?p=naik_pangkat">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
 
