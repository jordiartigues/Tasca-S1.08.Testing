# Tasca S1.08 - Testing

## Descripció

Exercicis de proves unitàries en PHP utilitzant PHPUnit per comprovar el funcionament de diferents classes i verificar que els resultats obtinguts siguin els esperats.

## Estructura del projecte

```text
Tasca-S1.08.Testing/
├── Nivel I/
│   ├── exercici1/
│   │   ├── src/
│   │   │   └── numberChecker.php
│   │   └── tests/
│   │       └── numberCheckerTest.php
│   └── exercici2/
│       ├── src/
│       │   └── sensorVelocitat.php
│       └── tests/
│           └── sensorVelocitatTest.php
├── .gitignore
├── composer.json
├── composer.lock
└── README.md
```

## Exercici 1: numberChecker

Proves unitàries de la classe `numberChecker` per verificar el seu comportament mitjançant PHPUnit.

## Exercici 2: sensorVelocitat

La classe `sensorVelocitat` classifica una velocitat en cinc categories:

- Menys de 30: `Molt lent`
- De 30 a 60: `Velocitat adequada`
- De 61 a 80: `Excés lleu`
- De 81 a 100: `Excés moderat`
- Més de 100: `Excés greu`

Les proves unitàries comproven que la classificació sigui correcta per a diferents velocitats.

## Requisits

- PHP 8.2 o superior
- Composer
- PHPUnit 11

## Instal·lació

Des de la carpeta arrel del projecte, instal·lar les dependències amb:

```bash
composer install
```

## Execució de les proves

Les proves s'executen des de la carpeta arrel del projecte mitjançant PHPUnit.

**Exercici 1:**

```powershell
.\vendor\bin\phpunit "Nivel I/exercici1/tests"
```

**Exercici 2:**

```powershell
.\vendor\bin\phpunit "Nivel I/exercici2/tests"
```

**Tots dos exercicis:**

```powershell
.\vendor\bin\phpunit "Nivel I/exercici1/tests" "Nivel I/exercici2/tests"
```

PHPUnit mostrarà els resultats de les proves i indicarà si s'han superat o si s'han produït errors.

## Dependències i fitxers ignorats

Les dependències s'instal·len amb Composer i es gestionen mitjançant `composer.json` i `composer.lock`.

Les carpetes `vendor/` i `.phpunit.cache/` s'exclouen del control de versions mitjançant `.gitignore`.

