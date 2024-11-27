<?php
require_once('Player.php');
require_once('Item.php');
require_once('Ataque.php');
require_once('Defesa.php');
require_once('Magia.php');
require_once('Inventario.php');

$ataque1 = new Ataque("Espada");
$defesa1 = new Defesa("Escudo de Madeira");
$magia1 = new Magia("Bola de fogo");

$ataque2 = new Ataque("Arco");
$defesa2 = new Defesa("Elmo de Aço");
$magia2 = new Magia("Poção");

$ataque3 = new Ataque("Clava");
$defesa3 = new Defesa("Botas de Ouro");
$magia3 = new Magia("Conjuração");

$ataque4 = new Ataque("Machado Grande");
$defesa4 = new Defesa("Escudo Mistico");
$magia4 = new Magia("Anel de Cura");

$player1 = new Player("Player 1");

echo "<hr>";
echo "<h2>PLAYER 1</h2>";
$player1->coletarItem($ataque1);
$player1->coletarItem($defesa1);
$player1->coletarItem($magia1);
echo "<strong>Espaço restante no inventário:</strong> {$player1->inventario->capacidadeLivre()}<strong>.</strong> <br>";

$player1->coletarItem($ataque2);
$player1->coletarItem($magia2);
$player1->soltarItem('Espada');

$player1->subirNivel();

echo "<strong>Espaço restante no inventário:</strong> {$player1->inventario->capacidadeLivre()}<strong>.</strong> <br>";

echo "<hr>";
echo "<h2>PLAYER 2</h2>";

$player2 = new Player("Player 2");
$player2->coletarItem($ataque3);
$player2->coletarItem($defesa3);
$player2->coletarItem($magia3);
$player2->coletarItem($ataque4);
$player2->coletarItem($defesa4);
echo "<strong>Espaço restante no inventário:</strong> {$player2->inventario->capacidadeLivre()}<strong>.</strong> <br>";
$player2->coletarItem($magia4);
$player2->subirNivel();
$player2->coletarItem($ataque1);
echo "<strong>Espaço restante no inventário:</strong> {$player2->inventario->capacidadeLivre()}<strong>.</strong> <br>";

echo "<hr>";
