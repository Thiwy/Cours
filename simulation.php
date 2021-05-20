<?php

class Simulation {

    var $nom;
    var $nbEnfant;
    var $nbEnfantPartant;
    var $quotient;
    var $prixSejour;
    var $reducQuotient;	// réduction fonction du QF
    var $reducEnfant;	// réduction fonction du nb d'enfants dans la famille
    var $sousTotal;	// sous-total après réduction QF + enfants
    var $prixTotalEnfant;	// total par enfant selon plafonnement
    var $prixTotal;	// Total pour tous les enfants

    public function __construct($donnees,$prix){
        $this->setNom($donnees['nom']);
        $this->setNbEnfant($donnees['nbEnfant']);
        $this->setNbEnfantPartant($donnees['nbEnfantPartant']);
        $this->setQuotient($donnees['quotient']);
        $this->setPrixSejour($prix);
    }
    
    public function ReducQuotient(){
        if ($this->quotient < 500) {
            $reduc = $this->prixSejour*0.1;
        } else {
            $reduc = 0;
        }

        return $reduc;
    }

    public function ReducEnfant(){
       
        if ($this->nbEnfant == 2):
            $reduc = $this->prixSejour*0.2;
        elseif ($this->nbEnfant > 2): 
            $reduc = $this->prixSejour*0.4;
        else:
            $reduc = 0;
        endif;
        

        return $reduc;
    }


    public function SousTotal(){
        $result = $this->prixSejour - $this->ReducQuotient() - $this->ReducEnfant() ;

        return $result;
    }

    
    public function PrixTotalEnfant(){
        if ($this->SousTotal()<100)
            $result = $this->SousTotal();
        else
            $result = 100;
        
        return $result;
    }

    public function PrixTotal(){
        $result = $this->PrixTotalEnfant() * $this->nbEnfantPartant;

        return $result;
    }

    public function Calcul(){

        /* calculs des réductions */
        $this->reducQuotient = $this->ReducQuotient(); 
        $this->reducEnfant = $this->ReducEnfant();
        /* Calcul du total par enfant */
        $this->sousTotal = $this->SousTotal();
        $this->prixTotalEnfant = $this->PrixTotalEnfant();
        /* Calcul du total pour tous les enfants */
        $this->prixTotal = $this->PrixTotal();

        return 1;

    }

    public function getNom()
    {
        return $this->nom;
    }

    public function getNbEnfant()
    {
        return $this->nbEnfant;
    }

    public function getNbEnfantPartant()
    {
        return $this->nbEnfantPartant;
    }

    public function getQuotient()
    {
        return $this->quotient;
    }

    public function getPrixSejour()
    {
        return $this->prixSejour;
    }
    

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function setNbEnfant($nbEnfant)
    {
        $this->nbEnfant = $nbEnfant;
    }

    public function setNbEnfantPartant($nbEnfantPartant)
    {
        $this->nbEnfantPartant = $nbEnfantPartant;
    }

    public function setQuotient($quotient)
    {
        $this->quotient = $quotient;
    }

    public function setPrixSejour($prixSejour)
    {
        $this->prixSejour = $prixSejour;
    }


	function getReducQuotient() { 
 		return $this->reducQuotient; 
	} 

	function setReducQuotient($reducQuotient) {  
		$this->reducQuotient = $reducQuotient; 
	} 

	function getReducEnfant() { 
 		return $this->reducEnfant; 
	} 

	function setReducEnfant($reducEnfant) {  
		$this->reducEnfant = $reducEnfant; 
	} 

	function getSousTotal() { 
 		return $this->sousTotal; 
	} 

	function setSousTotal($sousTotal) {  
		$this->sousTotal = $sousTotal; 
	} 

	function getPrixTotalEnfant() { 
 		return $this->prixTotalEnfant; 
	} 

	function setPrixTotalEnfant($prixTotalEnfant) {  
		$this->prixTotalEnfant = $prixTotalEnfant; 
	} 

	function getPrixTotal() { 
 		return $this->prixTotal; 
	} 

	function setPrixTotal($prixTotal) {  
		$this->prixTotal = $prixTotal; 
	} 
}