<?php
    $data = $class_pangkat->jumlahNaik();
    if($data){
?>
<div class="row">
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Notification</h4>
                </div>
                <div class="modal-body">
                    <?
                        foreach($data as $d){
                            $timestamp = strtotime($d['jatuh_tempo']);
                            $day = date('l', $timestamp);
                            $sabtu = $d['selisih'] - 1;
                            $minggu = $d['selisih'] - 2;
                            if($day == "Saturday"){
                                if ($sabtu == 0) {
                                    echo $d['nama_barang']. " - " .$day. " akan jatuh tempo pada <b>hari ini</b><br>";
                                } else {
                                    echo $d['nama_barang']. " - " .$day. " akan jatuh tempo pada " . $sabtu ." hari lagi<br>";
                                }
                            }elseif($day == "Sunday"){
                                if ($minggu == 0) {
                                    echo $d['nama_barang']. " - " .$day. " akan jatuh tempo pada <b>hari ini</b><br>";
                                } else {
                                    echo $d['nama_barang']. " - " .$day. " akan jatuh tempo pada " . $minggu ." hari lagi<br>";
                                }
                            }elseif($d['selisih'] >= 1){
                                echo $d['nama_barang']. " - " .$day. " akan jatuh tempo pada " . $d['selisih'] ." hari lagi<br>";
                            }elseif($d['selisih'] == 0){
                                echo $d['nama_barang']. " - " .$day. " akan jatuh tempo pada <b>hari ini</b><br>";
                            }else{
                                echo $d['nama_barang']. " - " .$day. " sudah <b>lewat</b> " . abs($d['selisih']) ." hari<br>";
                            }
                        }
                    ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>

        </div>
    </div>
<? } ?>
    <script type="text/javascript">
        $(window).load(function () {
            $('#myModal').modal('show');
        });
    </script>