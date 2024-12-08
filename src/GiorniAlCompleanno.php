<?php declare(strict_types=1);

namespace Paolo\compleanno;

class GiorniAlCompleanno {
    private $data_compleanno;

    public function __construct($data_compleanno) {
        $this->data_compleanno = $data_compleanno;
    }

    public function calcola() {
        $data_oggi = date("Y-m-d");
        $Compleanno = strtotime($this->data_compleanno);
        $Oggi = strtotime($data_oggi);

        $differenzaSecondi = $Compleanno - $Oggi;
        $giorni_rimasti = intval($differenzaSecondi / (60 * 60 * 24));

        if ($giorni_rimasti > 0) {
            return "Mancano " . $giorni_rimasti . " giorni al tuo compleanno!";
        } elseif ($giorni_rimasti < 0) {
            $prossimoCompleanno = strtotime("+1 year", $Compleanno);
            $differenzaSecondi = $prossimoCompleanno - $Oggi;
            $giorni_passati = abs($giorni_rimasti);
            return "Hai già compiuto gli anni " . $giorni_passati . " giorni fa!";
        } else {
            return "Buon Compleanno!";
        }
    }
}

