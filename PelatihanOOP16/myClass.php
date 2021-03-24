<?php  

    class PesawatTerbang 
    {
        public $warnaPesawat;

        public function __construct($warna)
        {
            $this->warnaPesawat = $warna;
        }

        public function gantiWarna($warna)
        {
            $this->warnaPesawat = $warna;
            return $this->warnaPesawat;
        }

        public function setWarna($warna)
        {
            $this->warnaPesawat = $warna;
        }

        public function getWarna(){
            return $this->warnaPesawat;
        }
    }


    class Mobil
    {
        protected $warnaMobil;
        protected $kecepatanMobil;

        public function __construct($warnaAwalMobil)
        {
            $this->warnaMobil = $warnaAwalMobil;
            $this->kecepatanMobil = 0;
        }

        public function tambahKecepatan($kecepatan)
        {
            $this->kecepatanMobil = $kecepatan + $this->kecepatanMobil;
        }

        public function setWarna($warna)
        {
            $this->warnaMobil = $warna;
        }

        public function getWarna(){
            return $this->warnaMobil;
        }

        public function getKecepatanMobil(){
            return $this->kecepatanMobil;
        }
    }


    class MobilBalap extends Mobil 
    {

        public function tambahKecepatan($kecepatan)
        {
            $this->kecepatanMobil = (2*$kecepatan) + $this->kecepatanMobil;
        }
    }
    
    
    

    // Jari-Jari

    class Lingkaran
    {
        protected $r, $keliling, $luas;

        public function __construct($jari_jari)
        {
            $this->r = $jari_jari;
        }

        public function setJariLingkaran($jari){
            $this->r = $jari;
        }

        public function getKeliling(){
            $this->keliling = 3.14 * $this->r * $this->r;
            return $this->keliling;
        }

        public function getLuas(){
            $this->luas = 2*3.14*$this->r;
            return $this->luas;
        }
    }
    