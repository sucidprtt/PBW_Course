<?php 
class MataKuliah{
    private $name;
    private $sks;

    //geter for name, mengambil nilai 
    public function getName(){
        return $this->name;
    }

    //setter for name, MEMBERIKAN NILAI PADA SUATAU PROPERTI
    public function setName($name){
        $this->name = $name;
    }

    public function getSks(){
        return $this->sks;
    }

    public function setSks($sks){
    $this->sks = $sks;
    }
}

$matkul = new MataKuliah();
$matkul->setName("Pemrograman Web");
$matkul->setSks("20");
echo $matkul->getName(); //Output: Pemrograman Web
echo "<br>";
echo $matkul->getSks(); //Ouput: 20
?>