<?php
    class Pangkat {

        private $koneksi;
        
        public function __construct() {
            global $dbh;
            $this->koneksi = $dbh;
        }

        public function dataNaik() {
            $sql = "SELECT id FROM barang";
            $ps = $this->koneksi->prepare($sql);
            $ps->execute();
            $res = $ps->rowcount();
            return $res;
        }

        public function all() {
            $sql = "SELECT * FROM barang";
            $ps = $this->koneksi->prepare($sql);
            $ps->execute();
            $res = $ps->fetchAll();
            return $res;
        }

        public function jumlahNaik() { 
            $sql = "SELECT * FROM view_barang WHERE selisih <=7";
            $ps = $this->koneksi->prepare($sql);
            $ps->execute();
            $res = $ps->fetchAll();
            return $res;
        }
        
       
    }
?>
