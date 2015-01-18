<?php
session_start();
$haslo = "arstherapia";
$sprawdz = $_SESSION['haslo'];
if ($sprawdz <> $haslo) {echo ('<br>Dostęp zabroniony.<br><br>Access denied.<br><br>Podaj hasło w ciągu 5s, inaczej twój komputer wybuchnie <form method="POST" action="sprawdz.php"><input type="text" name="haslo">');
exit();}
?>