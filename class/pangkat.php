<?php
    class Pangkat {

        private $koneksi;
        
        public function __construct() {
            global $dbh;
            $this->koneksi = $dbh;
        }

        public function dataNaik() {
            $sql = "SELECT id, nama, nip, tgl_pangkat1, tgl_pangkat2, selisih FROM view_pangkat WHERE selisih <=7";
            $ps = $this->koneksi->prepare($sql);
            $ps->execute();
            $res = $ps->fetchAll();
            return $res;
        }

        public function jumlahNaik() { 
            $sql = "SELECT id FROM view_pangkat WHERE selisih <=7";
            $ps = $this->koneksi->prepare($sql);
            $ps->execute();
            $res = $ps->rowcount();
            return $res;
        }

       
    }
?>
