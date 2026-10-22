<?php

class sensorVelocitat
{
    private int $velocitat;

    public function __construct(int $velocitat)
    {
        $this->velocitat = $velocitat;
    }

    public function clasificarVelocitat(): string
    {
        if ($this->velocitat < 30) {
            return "Molt lent";
        } elseif ($this->velocitat <= 60) {
            return "Velocitat adequada";
        } elseif ($this->velocitat <= 80) {
            return "Excés lleu";
        } elseif ($this->velocitat <= 100) {
            return "Excés moderat";
        } else {
            return "Excés greu";
        }
    }
}
