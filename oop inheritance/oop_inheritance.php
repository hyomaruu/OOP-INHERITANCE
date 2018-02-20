<?php
class motor
{
	public $warna;
	private $merk;
	protected $jenis;

	function __construct(){
		$this->warna = "";
		$this->merk = "";
		$this->jenis = "";
	}
	public function getWarna(){
		return $this->warna;
	}
	public function getMerk(){
		return $this->merk;
	}
	public function getJenis(){
		return $this->jenis;
	}

	public function setWarna($warna){
		$this->warna = $warna;
	}
	public function setMerk($merk){
		$this->merk = $merk;
	}
	public function setJenis($jenis){
		$this->jenis = $jenis;
	}

	function __destruct(){

	}
}

class sport extends motor{
	public function set_spesifikasi($merk,$warna)
	{
		$this->setMerk($merk);
		$this->jenis = 'sport';
		$this->warna = $warna;
	}

	public function summary()
	{
		return "ini mobil ".$this->jenis." dengan merk ".$this->getMerk()." berwarna ".$this->warna;
	}
}

class CBU extends motor{

	public function set_spesifikasi($merk,$warna)
	{
		$this->setMerk($merk);
		$this->jenis = 'CBU';
		$this->warna = $warna;
	}

	public function summary()
	{
		return "Ini Motor ".$this->jenis." dengan merk ".$this->getMerk()." berwarna ".$this->warna;
	}
}

$motor_sport = new sport();
$motor_sport->set_spesifikasi('Yamaha R25','Metalic Grey');
echo $motor_sport->summary();

echo "<br>";
$motor_CBU = new CBU();
$motor_CBU->set_spesifikasi('BMW S1000RR','Midnight Black');
echo $motor_CBU->summary();