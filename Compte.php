<?php

class Compte {
    private string $libelle;
    private float $solde;
    private string $deviseMonetaire;
    private Titulaire $titulaire;

    public function __construct(string $libelle, float $solde, string $deviseMonetaire, Titulaire $titulaire) {
        $this->solde = $solde;
        $this->deviseMonetaire = $deviseMonetaire;
        $this->titulaire = $titulaire;
        $this->libelle = $libelle;
        $this->titulaire = $titulaire;
        $titulaire->addCompte($this);
    }

    //get  

    public function getSolde() {
        return $this->solde;
    }

    public function getDeviseMonetaire() {
        return $this->deviseMonetaire;
    }

    public function getLibelle() {
        return $this->libelle;
    }
    
    //set

    public function setSolde($solde) {
        $this->solde = $solde;
    }

    public function setDeviseMonetaire($deviseMonetaire) {
        $this->deviseMonetaire = $monetaire;
    }

    public function setLibelle($libelle) {
        $this->libelle = $libelle;
    }

    public function crediter() {  //dobavit'
        $result = $this->solde + $sum;
        echo "Créditer le compte de $result euros<br>";
    }

    public function debiter() { //snyat'
        $result = $this->solde - $sum;
        echo "Débiter le compte de $result euros<br>";
    }

    public function transfert() {  //perevod
    }

    public function __toString() {
        return $this->libelle. ' : ' .$this->solde. ' '.$this->deviseMonetaire. '<br>';
    }
       
    
}
?>