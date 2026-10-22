<?php

use PHPUnit\Framework\TestCase;

final class sensorVelocitatTest extends TestCase
{
    public function testMoltLent(): void
    {
        $velocitat1 = new sensorVelocitat(20);
        $resultat = $velocitat1->clasificarVelocidad();
        $this->assertSame("Molt lent", $resultat);
    }

    public function testVelocitatAdequada(): void
    {
        $velocitat2 = new sensorVelocitat(30);
        $resultat = $velocitat2->clasificarVelocidad();
        $this->assertSame("Velocitat adequada", $resultat);

        $velocitat3 = new sensorVelocitat(60);
        $resultat = $velocitat3->clasificarVelocidad();
        $this->assertSame("Velocitat adequada", $resultat);

    }

    public function testExcesLleu (): void
    {
        $velocitat4 = new sensorVelocitat(61);
        $resultat = $velocitat4->clasificarVelocidad();
        $this->assertSame("Excés lleu", $resultat);

        $velocitat5 = new sensorVelocitat(80);
        $resultat = $velocitat5->clasificarVelocidad();
        $this->assertSame("Excés lleu", $resultat);

    }

    public function testExcesModerat(): void
    {
        $velocitat6 = new sensorVelocitat(81);
        $resultat = $velocitat6->clasificarVelocidad();
        $this->assertSame("Excés moderat", $resultat);

        $velocitat7 = new sensorVelocitat(100);
        $resultat = $velocitat7->clasificarVelocidad();
        $this->assertSame("Excés moderat", $resultat);
    }

    public function testExcesGreu(): void
    {
         $velocitat8 = new sensorVelocitat(101);
        $resultat = $velocitat8->clasificarVelocidad();
        $this->assertSame("Excés greu", $resultat);
    }


}


