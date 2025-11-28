<?php
require 'config.php';

function db_connect()
{

  try {
    $connectionString = 'mysql:host=' . DBHOST . ';dbname=' . DBNAME;
    $user = DBUSER;
    $pass = DBPASS;

    $pdo = new PDO($connectionString, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $pdo;
  } catch (PDOException $e) {
    die($e->getMessage());
  }
}

function handle_form_submission()
{
  global $pdo;

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['fullName']) && isset($_POST['email']) && isset($_POST['service']) && isset($_POST['message'])) {
      $sql = 'INSERT INTO inquiries (fullName, company, email, phone, service, message) VALUES(:fullName, :company, :email, :phone, :service, :message)';

      $statement = $pdo->prepare(query: $sql);

      $statement->bindValue(':fullName', $_POST['fullName']);
      $statement->bindValue(':company', $_POST['company']);
      $statement->bindValue(':email', $_POST['email']);
      $statement->bindValue(':phone', $_POST['phone']);
      $statement->bindValue(':service', $_POST['service']);
      $statement->bindValue(':message', $_POST['message']);

      if ($statement->execute()) {
        return $pdo->lastInsertId();
      } else {
        return false;
      }
    }
  }
}

function get_id() {
  global $pdo;
  global $ID;

  $sql = 'SELECT id FROM inquiries ORDER BY id DESC LIMIT 1';

  $result = $pdo->query($sql);
  $row = $result->fetch();

  return $row['id'];
}
