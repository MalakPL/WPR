<?php

class AutoZDodatkami extends NoweAuto
{
    private $alarm;
    private $radio;
    private $klimatyzacja;

    public function __construct($model, $cenaEuro, $kursEuroPLN, $alarm, $radio, $klimatyzacja)
    {
        parent::__construct($model, $cenaEuro, $kursEuroPLN);
        $this->alarm = $alarm;
        $this->radio = $radio;
        $this->klimatyzacja = $klimatyzacja;
    }

    public function getAlarm()
    {
        return $this->alarm;
    }

    public function setAlarm($alarm)
    {
        $this->alarm = $alarm;
    }

    public function getRadio()
    {
        return $this->radio;
    }

    public function setRadio($radio)
    {
        $this->radio = $radio;
    }

    public function getKlimatyzacja()
    {
        return $this->klimatyzacja;
    }

    public function setKlimatyzacja($klimatyzacja)
    {
        $this->klimatyzacja = $klimatyzacja;
    }

    public function ObliczCene()
    {
        $cenaSamochodu = parent::ObliczCene();
        $cenaZDodatkami = $cenaSamochodu + $this->alarm + $this->radio + $this->klimatyzacja;
        return $cenaZDodatkami;
    }

    public function ObliczCenePLN()
    {
        return $this->ObliczCene() * $this->getKursEuroPLN();
    }
}
