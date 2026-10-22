# Tasca S1.08 - Testing

## Descripció

Exercici per practicar les proves automatitzades en PHP utilitzant PHPUnit.

## Estructura del projecte

```text
Tasca-S1.08.Testing/
├── Nivel I/
│   ├── src/
│   │   └── numberChecker.php
│   └── tests/
│       └── numberCheckerTest.php
├── .gitignore
├── composer.json
├── composer.lock
└── README.md
```

## Requisits

- PHP
- Composer

## Instal·lació

Des de la carpeta arrel del projecte, executar:

```bash
composer install
```

Això instal·la PHPUnit i les dependències necessàries.

## Execució dels tests

Per executar les proves automatitzades, utilitzar:

```bash
.\vendor\bin\phpunit "Nivel I/exercici1/tests/numberCheckerTest.php"
```

## Proves realitzades

### `isEven()`

Comprova si un nombre és parell. Es proven nombres positius, negatius, imparells i el zero.

### `isPositive()`

Comprova si un nombre és positiu. Es proven nombres positius, negatius i el zero, que no es considera positiu.

## Objectiu

Practicar la creació i execució de proves automatitzades amb PHPUnit per verificar el comportament dels mètodes d'una classe PHP.
