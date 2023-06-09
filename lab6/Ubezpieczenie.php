<?php


class Ubezpieczenie extends AutoZDodatkami
{
    private $procentowaWartoscUbezpieczenia;
    private $liczbaLatPosiadania;

    public function __construct($model, $cenaEuro, $kursEuroPLN, $alarm, $radio, $klimatyzacja, $procentowaWartoscUbezpieczenia, $liczbaLatPosiadania)
    {
        parent::__construct($model, $cenaEuro, $kursEuroPLN, $alarm, $radio, $klimatyzacja);
        $this->procentowaWartoscUbezpieczenia = $procentowaWartoscUbezpieczenia;
        $this->liczbaLatPosiadania = $liczbaLatPosiadania;
    }

    public function getProcentowaWartoscUbezpieczenia()
    {
        return $this->procentowaWartoscUbezpieczenia;
    }

    public function setProcentowaWartoscUbezpieczenia($procentowaWartoscUbezpieczenia)
    {
        $this->procentowaWartoscUbezpieczenia = $procentowaWartoscUbezpieczenia;
    }

    public function getLiczbaLatPosiadania()
    {
        return $this->liczbaLatPosiadania;
    }

    public function setLiczbaLatPosiadania($liczbaLatPosiadania)
    {
        $this->liczbaLatPosiadania = $liczbaLatPosiadania;
    }

    public function ObliczCene()
    {
        $cenaSamochoduZDodatkami = parent::ObliczCene();
        $cenaUbezpieczenia = $this->procentowaWartoscUbezpieczenia * ($cenaSamochoduZDodatkami * ((100 - $this->liczbaLatPosiadania) / 100));
        return $cenaUbezpieczenia;
    }
}
