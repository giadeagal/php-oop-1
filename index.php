


<!-- // è definita una classe ‘Movie’ 
    // => all'interno della classe sono dichiarate delle variabili d'istanza 
    // => all'interno della classe è definito un costruttore 
    // => all'interno della classe è definito almeno un metodo

// vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php
class Movie {
    public $title;
    public $directed_by;
    public $distributed_by;
    public $collection;

    function __construct($_title, $_directed_by, $_distributed_by, $_collection) {
        $this->title = $_title;
        $this->directed_by = $_directed_by;
        $this->distributed_by = $_distributed_by;
        $this->collection = $_collection;
    }

    public function setCollection($release_year){
        if ($release_year < 2000) {
            $this->collection = "Classics";
        } else if ($release_year <= 2000 && $release_year < 2021){
            $this->collection = "Standard Collection";
        } else {
            $this->collection = "Newly Released";
        }
    }

    public function getCollection() {
        return $this->collection;
    }
}

$life_of_p = new Movie("Life of P", "Ang Lee", "20th Century Fox");
$life_of_p->setCollection(2012);
var_dump($life_of_p);

$the_shining = new Movie("The Shining", "Stanley Kubrick", "Warner Bros.");
$the_shining->setCollection(1980);
var_dump($the_shining);

?>

