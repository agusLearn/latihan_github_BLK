<?php  


class Lingkaran
    {
        protected $r, $keliling, $luas;

        public function __construct($jari_jari)
        {
            $this->r = $jari_jari;
        }

        // public function setJariLingkaran($jari){
        //     $this->r = $jari;
        // }

        public function getKeliling(){
            // $this->keliling = 3.14 * $this->r * $this->r;
            return 3.14 * $this->r * $this->r;
        }

        public function getLuas(){
            $this->luas = 2*3.14*$this->r;
            return $this->luas;
        }
    }