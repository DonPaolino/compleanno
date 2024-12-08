<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Paolo\compleanno\GiorniAlCompleanno;


class GiorniAlCompleannoTest extends TestCase {

    public function testCompleannoFuturo() {
        // Calcolo dinamico del numero di giorni al compleanno
        $giorni_futuri = 10;
        $data_compleanno = date("Y-m-d", strtotime("+$giorni_futuri days"));
        $giorniAlCompleanno = new GiorniAlCompleanno($data_compleanno);
    
        // Stringa attesa
        $stringa_attesa = "Mancano $giorni_futuri giorni al tuo compleanno!";
        
        // Confronta il risultato atteso con quello prodotto dal metodo
        $this->assertEquals($stringa_attesa, $giorniAlCompleanno->calcola());
    }

    public function testCompleannoOggi() {
        // Compleanno oggi
        $data_compleanno = date("Y-m-d");
        $giorniAlCompleanno = new GiorniAlCompleanno($data_compleanno);
        $this->assertEquals("Buon Compleanno!", $giorniAlCompleanno->calcola());
    }

    public function testCompleannoPassato() {
        // Compleanno 20 giorni fa
        $data_compleanno = date("Y-m-d", strtotime("-20 days"));
        $giorniAlCompleanno = new GiorniAlCompleanno($data_compleanno);
    
        // Calcola il numero di giorni passati
        $giorni_passati = 20; // Sappiamo che sono 20 giorni
    
        // Stringa attesa
        $stringa_attesa = "Hai già compiuto gli anni $giorni_passati giorni fa!";
        
        // Confronta il risultato atteso con quello prodotto dal metodo
        $this->assertEquals($stringa_attesa, $giorniAlCompleanno->calcola());
    }

    
}
