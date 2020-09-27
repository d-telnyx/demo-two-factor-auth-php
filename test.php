<?php

$TOKENS_DB_PATH = __DIR__ . '/tokens.db';
$pdo = new PDO('sqlite:' . $TOKENS_DB_PATH);

$statement = $pdo->query('SELECT * from verifications');

foreach($statement as $row) {
  print_r($row);
}
// echo $TOKENS_DB_PATH;
// $stmt = $pdo->prepare('INSERT INTO verifications (phone_number, token) VALUES (\'+19197891146\', \'abc123\')');
// $stmt->execute();


