<?php
ini_set('display_errors', '1');
error_reporting(E_ALL);

$user = '';
// ?: Ternary-operator
//          Villkor      Om sant    Om falskt
$status = empty($user) ? "Anonym" : "Inloggad";
echo "<h1>Du är $status</h1>";

echo '<hr>';

// Nullförening (Null Coalescing )
$user = $_GET['user'] ?? 'Guest' ;
echo "<h1>Välkommen $user</h1>";

echo '<hr>';

$msg = '<p>Hej, du har beställt följane:<br>';
$msg .= 'iPhone 7 <br>';
$msg .= 'iPhone 8 <br>';
$msg .= 'iPhone X <br>';
$msg .= '<br>Vi kommer att skicka produkten inom 24 veckor</p>';

echo $msg;

echo '<hr>';

// Konkatenering 
$txt = 'Nackademin';
$url = 'http://nackademin.se';

// <a href=http://nackademin.se>Nackademin</a>

echo '<a href=" ' .$url. '">' .$txt. '</a>';
echo '<br>';
echo '<a href="$url">$txt</a>';  // OBS! FEL
echo '<br>';
echo "<a href='$url'>$txt</a>";
echo '<br>';
echo "<a href=$url>$txt</a>";
echo '<br>';
echo "<a href=$url>\"$txt\"</a>";
echo '<br>';
$image = 'https://picsum.photos/200';
echo "<img src='$image' alt='My Image'>";
?>
<hr>
<img src="<?=$image?>" alt="My Best Image">




<div style="height:500px;"></div>
