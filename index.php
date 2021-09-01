<?php

// è definita una classe ‘Movie’ 
    // => all'interno della classe sono dichiarate delle variabili d'istanza 
    // => all'interno della classe è definito un costruttore 
    // => all'interno della classe è definito almeno un metodo

// vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà

class Movie {
    public $title;
    public $directed_by;
    public $distributed_by;
    public $release_year;
    public $collection;

    function __construct(_$title, $_directed_by, $_distributed_by, $_release_year, $_collection) {
        $this->title = $_title;
        $this->directed_by = $_directed_by;
        $this->distributed_by = $_distributed_by;
        $this->release_year = $_release_year;
        $this->collection = $_collection;
    }

    public function setCollection(){
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

?>