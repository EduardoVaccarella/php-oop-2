<?php

class Prodotto {

    public $costo;
    public $disponibilitá;
    public $colore;
    public $taglia;


    function __construct($_costo, $_disponibilitá, $_colore = '/', $_taglia = '/') {



        if(is_numeric($_costo) && ($_costo > 0)) {
            $this->costo = $_costo . '€';
        } else {
            throw new Exception('Il valore costo deve essere numerico e maggiore di zero');
        };
        


        if($_disponibilitá == true) {
            $this->disponibilitá = 'Disponibilitá immediata';
        } elseif ($_disponibilitá == false) {
            $this->disponibilitá = 'Prodotto non disponibile';
        } else {
            throw new Exception('Il valore disponibilitá deve essere un booleano');
        };



        if(is_string($_colore)) {
            $this->colore = $_colore;
        } else {
            throw new Exception('Il valore colore deve essere una stringa');
        };



        if(is_string($_colore)) {
            $this->taglia = $_taglia;
        } else {
            throw new Exception('Il valore taglia deve essere una stringa');
        };

    }

}

$collare = new Prodotto(12, true, 'Rosso', 'M');
$guinzaglio = new Prodotto(18, true, 'Rosso', 'M');
$antipulci = new Prodotto(7, false);



class Carrello {

    public $totale = 0;
    public $prodottiCarrello = [];
    public $registrazioneUtente = false;
    public $scontoRegistrazione = 20;

    function registraUtente($statoRegistrazione) {
        if(is_bool($statoRegistrazione)) {
            $this->registrazioneUtente = $statoRegistrazione;
        } else {
            throw new Exception('Il parametro stato registrazione deve essere un booleano');
        };
    }

    function aggiungiProdotto($_prodotto = new Prodotto(16, true, 'Arancione', 'L')) {
        array_push($this->prodottiCarrello, $_prodotto);

        foreach($this->prodottiCarrello as $prodotto) {
            foreach($prodotto['costo'] as $prezzo) {
                $this->totale += $prezzo;
            };
        };

        if($this->registrazioneUtente == true) {
            $this->totale = ($this->totale) / 100 * $this->scontoRegistrazione;
        };
    }
}

class Pagamento {

    public $panCarta;
    public $scadenzaCarta;
    public $cvcCarta;

    function __construct($_panCarta, $_scadenzaCartaMese, $_scadenzaCartaAnno, $_cvcCarta) {

        if(is_numeric($_panCarta)) {
            $this->panCarta = $_panCarta;
        } else {
            throw new Exception('Il pan deve essere numerico');
        };

        if(checkdate($_scadenzaCartaGiorno = 28, $_scadenzaCartaMese, $_scadenzaCartaAnno)) {
            if($_scadenzaCartaAnno > date('y')) {
                $this->scadenzaCarta = false;
            } elseif($_scadenzaCartaAnno = date('y')) {
                if($_scadenzaCartaMese >= date('m')) {
                    $this->scadenzaCarta = false;
                };
            } else {
                throw new Exception('Carta scaduta');
            };
        }

        if(is_numeric($_cvcCarta)) {
            $this->cvcCarta = $_cvcCarta;
        } else {
            throw new Exception('Il cvc deve essere numerico');
        };
    }
}