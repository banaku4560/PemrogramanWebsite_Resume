<?php
// mendefinisikan rumus tabung ke dalam class dengan file yang berbeda
    class Tabung{
        private $diameter;
        private $tinggi;
        private $r;
        private $luas_Selimut=0;
        private $phi=3.14;


        public function setDiameter($value){
            $this->diameter=$value;
            $this->r=$this->diameter/2;
        }
        public function setTinggi($value){
            $this->tinggi=$value;
        }
        public function getLuasSelimut(){
            return $this->luas_Selimut=3.14*$this->diameter*$this->tinggi;
        }
    }
?>