<?php 
 
class Titulaire {
    private string $nom;
    private string $prenom;
    private DateTime $datedeNaissance;
    private string $ville;
    private array $comptes;
     
    public function __construct(string $nom, string $prenom, string $datedeNaissance, string $ville) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->datedeNaissance = new DateTime ($datedeNaissance);
        $this->ville = $ville;
        $this->comptes = [];
    }

    //get

    public function getNom() {
        return $this->nom;
    }

    public function getPrenom() {
        return $this->prenom;
    }

    public function getDatedeNaissance() {
        return $this->datedeNaissance;
    }

    public function getVille() {
        return $this->ville;
    }

    //set

    public function setNom(string $nom) {
        $this->nom = $nom;
    }

    public function setPrenom(string $prenom) {
        $this->prenom = $prenom;
    }

    public function setDatedeNaissance(DateTime $datedeNaissance) {
        $this->datedeNaissance = $datedeNaissance;
    }

    public function setVille(string $ville) {
        $this->ville = $ville;
    }


    public function addCompte(Compte $compte) {
        $this->comptes[] = $compte;
    }

    public function getAge() {
        $currentDate = new DateTime();
        $age = $this->datedeNaissance->diff($currentDate)->y;
        return $age ." ans";
    }

    public function afficherInfos() {
        echo $this.' <br> sont age est de ' .$this->getAge().'<br>';
        echo 'ville : ' .$this->ville. '<br>';
        // echo 'date de naissance : ' .$this->datedeNaissance. '<br>';  //nujno konvertirovat' 

        foreach($this->comptes as $compte) { //ne rabotaet
            echo $compte;
        }
    }

    public function afficherYear()
    {
        $str = $this->datedeNaissance->format("Y");
        return "($str) ";
        // changer date en year (string)
    }

    public function __toString() {
        return "Comptes de $this->nom $this->prenom<br>";
    }



}

?>