<?php
    class OperaAlbum {
        private $name; 
        private $price;
        private $composer;
        private $objectId;
        private $description;

        function __construct ($name_IN, $price_IN, $composer_IN, $objectId_IN, $description_IN) {
           
            $this->name = $name_IN;
            $this->price = $price_IN;
            $this->composer = $composer_IN;
            $this->objectId = $objectId_IN;
            $this->description = $description_IN;

        } 

        function getName() {
            return $this->name;
        }

        function getPrice(){
            return $this->price;
        }

        function getTaxedPrice(){
            return (int)$this->price * 1.25 . "kr";
        }

        function getComposer(){
            return $this->category;
        }

        function getObjectId(){
            return $this->objectId;
        }

        function getDescription(){
            return $this-> description;
        }

        function getAll(){
            return array($this->name, $this->price, $this->composer, $this->objectId, $this->description);
        }
    }


    $leNozzeDiFigaro = new OperaAlbum("Le Nozze di Figaro", "200kr"
    , "W.A Mozart", "12A", "A comedy drama about a servant (Figaro), his soon to be wife (Susanna), The Count (Count Almaviva) and his wife (Rosina).");

    $dieZauberflöte = new OperaAlbum("Die Zauberflöte", "200kr", "W.A Mozart", "14A", "");

    $donGiovanni = new OperaAlbum("Don Giovanni", "200kr", "W.A Mozart", "20B", "A story about the notorious playboy Don Giovanni with his faitful servant Leporello and of all Don Giovannis trickery in using all means valiable to conquer yet another sexual conquest");

    echo "<pre>";
    print_r ($leNozzeDiFigaro->getAll()) . "<br>";
    print_r ($dieZauberflöte->getAll()) . "<br>";
    print_r ($donGiovanni->getAll()) . "<br>";
    echo "</pre>";
    echo "pris inklusive moms:" . $leNozzeDiFigaro->getTaxedPrice();