<?php
    class Shell {
        protected $ppn;
        private $SSuper,
                $SVPower,
                $SVPowerDiesel,
                $SVPowerNitro;
    
        public function __construct(){
            $this->ppn = 0.1;
        }
    
        public function SetHarga($tipe1, $tipe2, $tipe3, $tipe4){
            $this->SSuper = $tipe1;
            $this->SVPower = $tipe2;
            $this->SVPowerDiesel = $tipe3;
            $this->SVPowerNitro = $tipe4;
        }
    
        public function GetHarga(){
            $data["SSuper"] = $this->SSuper;
            $data["SVPower"] = $this->SVPower;
            $data["SVPowerDiesel"] = $this->SVPowerDiesel;
            $data["SVPowerNitro"] = $this->SVPowerNitro;
            return $data;
        }
    }
    
    class Beli extends Shell {
        public $jumlah;
        public $jenis;
    
        public function HargaBeli(){
            $DataHarga = $this->GetHarga();
            $HargaBeli = $this->jumlah * $DataHarga[$this->jenis];
            $hargaPPN = $HargaBeli * $this->ppn;
            $HargaBayar = $HargaBeli + $hargaPPN;
            return $HargaBayar;
        }
    
        public function CetakPembelian(){
            echo "<center>";
            echo "Anda membeli bahan bakar minyak tipe " . $this->jenis . "<br>";
            echo "Dengan jumlah: " . $this->jumlah . " Liter <br>";
            echo "Total yang harus anda bayar Rp." . number_format($this->HargaBeli(), 0, '', '') . "<br>";
            echo "</center>";
        }
    }
    ?>
  