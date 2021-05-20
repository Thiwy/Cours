<?php

class SejourDAO {

    
    public function getSejour($sejour){
        $str = "SELECT sejintitule, sejmontantmbi FROM sejour WHERE sejno = $sejour";
        $result = $this->db->query($str);   
        $sejour = $result->fetch(PDO::FETCH_ASSOC);
        return array('intitule' => $sejour['sejintitule'],'montant' => $sejour['sejmontantmbi']);

    }

    private $db;


    public function __construct($db) {
        $this->db = $db;
    }


    private function buildSejour($row) {
        $sejour = new Sejour();
        $sejour->setSejNo($row['SEJNO']);
        $sejour->setSejIntitule($row['SEJINTITULE']);
        $sejour->setSejMontantMBI($row['SEJMONTANTMBI']);
        $sejour->setSejDteDeb($row['SEJDTEDEB']);
        $sejour->setSejDuree($row['SEJDUREE']);
        return $sejour;
    }

    //Retourne tous les séjours
    public function getAllSejours()
    {

        $str = "select * from sejour order by sejno;";
        $result = $this->db->query($str);
        $sejours = array();
        foreach ($result as $row) {
            $sejNo = $row['SEJNO'];
            $sejours[$sejNo] = $this->buildSejour($row);
        }
        return $sejours;

    }

}