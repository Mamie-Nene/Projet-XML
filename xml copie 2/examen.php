<?php
    require_once 'exercice.php';

    class Examen 
    {
        public $matiere;
        public $classe;
        public $semestre;
        public $date;
        public $professeur;
        public $exercices;
        
        function __construct($matiere,$classe, $semestre, $date, $professeur, $exercices)
        {
            $this->matiere=$matiere;
            $this->classe=$classe;
            $this->semestre=$semestre;
            $this->date=$date;
            $this->professeur=$professeur;
            $this->exercices=$exercices;  
        }   
        public static function add($examen)
        {
            $exam = simplexml_load_file("root.xml");
            // Description
            $description = $exam->addChild("description");
            $description->addAttribute("classe", $examen->classe);
            $description->addAttribute("matiere", $examen->matiere);
            $description->addAttribute("semestre", $examen->semestre);
            $description->addAttribute("date", $examen->date);
            // Professeur
            $professeur = $exam->addChild("professeur");
            $professeur->addChild("prenom", $examen->professeur->prenom);
            $professeur->addChild("nom", $examen->professeur->nom);
            $exam->professeur->prenom = $examen->professeur->prenom;
            $exam->professeur->nom = $examen->professeur->nom;
            // Exercices
            foreach($examen->exercices as $exo)
            {
                Exercice::add($exo, $exam);
            }
            
            $exam->asXml("exam".$examen->matiere.$examen->classe.$examen->date.".xml");
        }
        public function get()
        {
            
        }
    }
?>
