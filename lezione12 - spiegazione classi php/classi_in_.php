un oggetto ha propietà e metodi, definiti nella classe e instanziati nell'oggetto

<?php
class Question {
    //il public è il modificatore di accesso
    //variabili public sono i membri che possiamo richiamare fuori, direttamente sull'istanza
    //variabili private si possono usare utilizzarlo all'interno dei metodi utilizzando la keyword $this->
    
    //la proprietà statica è uguale per tutti gli oggetti e istanze con questa classe, se la cambi cambia in tutti gli oggetti
    public static $count = 0;
    //si richiama con nome classe :: proprietà statica es. Question::count
    
    //PROPRIETA'
    public $text = "";
    public $choices = [];
    //metodi
    public function setText($text) {
    }

    public static function getCount(){
        return self::$count;
    }
}

$question = new Question;
//ora question ha la struttura dell'oggetto Question
$question = new Question;
//ora question2 ha la struttura dell'oggetto Question ma se modifico question non si modifica questio2 ovviamente, perchè new Question da solo la struttura

//$question ->
//questo permette di accedere alle proprietà e ai metodi dell'oggetto 

//Question::class
//proprietà statica della classe Question

//Question::getCount()

//chiamo funzioni e altre cose concatenate
//$question
//    ->setText("blabala")
//    ->addCount()
//    ->print();

?>