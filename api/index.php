<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
  $title = 'Homework 1';
  ?>

  <title>
    <?= $title ?>
  </title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@700&family=Roboto:wght@400;500;700;900&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="styles.css" />
</head>

<body>
  <?php

  $number1 = 51;
  $number2 = 22;

  const NUMBER1 = 21;
  const NUMBER2 = 22;

  $floatNumber1 = 51.256;
  $floatNumber2 = 22.128;

  $str = "I'm learning PHP";
  $str2 = " I'm learning PHP ";
  $findme = 'P';
  $subStrBefore = "I'm";
  $subStrAfter = 'You are';

  ?>
  <main>
    <section class="hero-section">
      <div class="container">
        <h1 class="hero-title">Домашнє завдання до Лекції №2</h1>
      </div>
    </section>
    <section class="section">
      <div class="container">
        <h2 class="section-title">Робота з числами</h2>
        <div class="list-holder">

          <ul class="list">
            <li>Число 1:
              <span class="sub-text">
                <?= $number1 ?>
              </span>
            </li>
            <li>Число 2:
              <span class="sub-text">
                <?= $number2 ?>
              </span>
            </li>
            <li>Результат додавання:
              <span class="sub-text">
                <?= ($number1 + $number2) ?>
              </span>
            </li>
          </ul>

          <ul class="list">
            <li>Константа 1:
              <span class="sub-text">
                <?= NUMBER1 ?>
              </span>
            </li>
            <li>Константа 2:
              <span class="sub-text">
                <?= NUMBER2 ?>
              </span>
            </li>
            <li>Результат додавання:
              <span class="sub-text">
                <?= (NUMBER1 + NUMBER2) ?>
              </span>
            </li>
          </ul>

          <ul class="list">
            <li>Дійсне число 1:
              <span class="sub-text">
                <?= $floatNumber1 ?>
              </span>
            </li>
            <li>Дійсне число 2:
              <span class="sub-text">
                <?= $floatNumber2 ?>
              </span>
            </li>
            <li>Результат додавання:
              <span class="sub-text">
                <?= ($floatNumber1 + $floatNumber2) ?>
              </span>
            </li>
          </ul>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <h2 class="section-title">Робота зі строками</h2>
        <p class="section-text">
          Строка:
          <span class="sub-text">
            <?= $str ?>
          </span>
        </p>

        <ul class="list string-list">
          <li><span class="sub-text">str_repeat():</span>
            <?= str_repeat($str . " ", 3) ?>
          </li>
          <li><span class="sub-text">strlen():</span>
            <?= strlen($str) ?>
          </li>
          <li><span class="sub-text">md5():</span>
            <?= md5($str) ?>
          </li>
          <li><span class="sub-text">strpos():</span>
            <?= strpos($str, $findme) ?>
          </li>
          <li><span class="sub-text">strrev():</span>
            <?= strrev($str) ?>
          </li>
          <li><span class="sub-text">substr():</span>
            <?= substr($str, -10, -1) ?>
          </li>
          <li><span class="sub-text">str_replace():</span>
            <?= str_replace($subStrBefore, $subStrAfter, $str) ?>
          </li>
          <li><span class="sub-text">strtolower():</span>
            <?= strtolower($str) ?>
          </li>
          <li><span class="sub-text">strtoupper():</span>
            <?= strtoupper($str) ?>
          </li>
          <li><span class="sub-text">trim():</span>
            <span class="sub-text">source:</span>
            <?= var_dump($str2) ?>
            <span class="sub-text">result:</span>
            <?= var_dump(trim($str2)) ?>
          </li>
        </ul>
      </div>
    </section>
  </main>
</body>

</html>