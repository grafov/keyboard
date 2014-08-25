<?php

// EDIT MY PATH
$file = strtolower(file_get_contents('./workman.txt'));

function get_points($layout = 'Norman') {

  switch ($layout) {
    case 'QWERTY':
      $points[1] = array('s', 'd', 'f', 'j', 'k', 'l');
      $points[1.5] = array('a', ';');
      $points[2] = array('w', 'e', 'i', 'o', 'v', 'm');
      $points[3] = array('r', 'u', 'g', 'h', 'c', 'n', ',');
      $points[4] = array('q', 't', 'p', 'z', 'x', '.', '/');
      $points[5] = array('b', 'y');
      break;

    case 'Asset':
      $points[1] = array('s', 'e', 't', 'n', 'i', 'o');
      $points[1.5] = array('a', 'r');
      $points[2] = array('w', 'j', 'u', 'l', 'v', 'm');
      $points[3] = array('f', 'p', 'd', 'h', 'c', 'k', ',');
      $points[4] = array('q', 'z', 'x', 'g', ';', '.', '/');
      $points[5] = array('b', 'y');
      break;

    case 'Capewell':
      $points[1] = array('a', 'e', 'i', 'h', 't', 'n');
      $points[1.5] = array('s', 'o');
      $points[2] = array(',', '.', 'g', 'r', 'v', 'm');
      $points[3] = array('p', 'f', 'c', 'u', 'd', 'l', 'w');
      $points[4] = array("'", 'z', 'x', 'y', 'k', 'b', ';');
      $points[5] = array('q', 'j');
      break;

    case 'Colemak':
      $points[1] = array('r', 's', 't', 'n', 'e', 'i');
      $points[1.5] = array('a', 'o');
      $points[2] = array('w', 'f', 'y', 'u', 'v', 'm');
      $points[3] = array('p', 'l', 'd', 'h', 'c', 'k', ',');
      $points[4] = array('q', 'g', ';', 'z', 'x', '.', '/');
      $points[5] = array('b', 'j');
      break;


    case 'Colemacs':
      $points[1] = array('a', 'e', 'n', 'd', 'o', 'i');
      $points[1.5] = array('r', 's');
      $points[2] = array('w', 't', 'l', 'f', 'y', 'm');
      $points[3] = array('p', 'u', 'h', 'b', 'k', 'j', 'x');
      $points[4] = array('q', 'g', ';', 'z', ',', 'x', '/');
      $points[5] = array('.', 'v');
      break;

    case 'Dvorak':
      $points[1] = array('e', 'o', 'u', 'h', 't', 'n');
      $points[1.5] = array('a', 's');
      $points[2] = array(',', '.', 'c', 'r', 'k', 'm');
      $points[3] = array('p', 'g', 'd', 'i', 'j', 'b', 'w');
      $points[4] = array("'", 'y', 'l', ';', 'q', 'v', 'z');
      $points[5] = array('b', 'f');
      break;

    case 'Klausler':
      $points[1] = array('a', 'e', 'i', 'n', 't', 'h');
      $points[1.5] = array('o', 's');
      $points[2] = array(',', 'u', 'm', 'f', ';', 'v');
      $points[3] = array('y', 'l', "'", 'd', 'r', 'x', 'g');
      $points[4] = array('k', 'q', 'c', 'b', 'j', '.', 'p');
      $points[5] = array('z', 'w');
      break;

    case 'Minimak':
      $points[1] = array('s', 't', 'r', 'n', 'e', 'o');
      $points[1.5] = array('a', 'p');
      $points[2] = array('w', 'd', 'i', 'l', 'v', 'm');
      $points[3] = array('f', 'u', 'g', 'h', 'c', 'j', ',');
      $points[4] = array('q', 'k', ';', 'z', 'x', '.', '/');
      $points[5] = array('b', 'y');
      break;

    case 'QGMLWY':
      $points[1] = array('s', 't', 'n', 'a', 'e', 'o');
      $points[1.5] = array('d', 'h');
      $points[2] = array('g', 'm', 'u', 'b', 'v', 'p');
      $points[3] = array('l', 'f', 'r', 'i', 'c', 'k', ',');
      $points[4] = array('z', 'x', 'q', 'w', ';', '.', '/');
      $points[5] = array('j', 'y');
      break;

    case 'Workman':
      $points[1] = array('s', 'h', 't', 'n', 'e', 'o');
      $points[1.5] = array('a', 'i');
      $points[2] = array('d', 'r', 'c', 'u', 'p', 'l');
      $points[3] = array('w', 'f', 'g', 'y', 'm', 'k', ',');
      $points[4] = array('q', 'b', ';', 'z', 'x', '.', '/');
      $points[5] = array('v', 'j');
      break;

    case 'Norman':
    default:
      $points[1] = array('s', 'e', 't', 'n', 'i', 'o');
      $points[1.5] = array('a', 'r');
      $points[2] = array('w', 'd', 'h', 'l', 'v', 'm');
      $points[3] = array('f', 'g', 'y', 'u', 'c', 'p', ',');
      $points[4] = array('q', 'z', 'x', 'k', ';', '.', '/');
      $points[5] = array('b', 'j');
      break;

  }

  return $points;
}

$count = count_chars($file, 1);
$strlen = strlen($file);
arsort($count);

echo "Order of frequency:<br />\n";

foreach ($count as $i => $val) {
  echo chr($i);
}

echo "<br />\n";

foreach ($count as $i => $val) {
  echo chr($i) .": ". sprintf("%.1f", ($val/$strlen*100)) ."%<br />\n";
}

echo "<br />\n<br />\n";

$layouts = array('QWERTY', 'Asset', 'Capewell', 'Colemak', 'Colemacs', 'Dvorak', 'Klausler', 'Minimak', 'Norman', 'QGMLWY', 'Workman');

foreach ($layouts as $layout) {

  $points_array = get_points($layout);
  $score = 0;

  foreach ($count as $i => $val) {
    $char = chr($i);
    foreach ($points_array as $points => $cap) {
      if (in_array(chr($i), $cap)) {
        $score = $score + ($points * $val);
        break;
      }
    }
  }
  echo "&nbsp;* $layout: $score<br />\n";
}