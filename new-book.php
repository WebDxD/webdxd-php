<?php
  if (isset($_POST['title']) && isset($_POST['price'])) {
    $title = $_POST['title'];
    $price = $_POST['price'];

    $link = mysqli_connect('localhost', 'root', 'root', 'book_db');
    
    $query = "INSERT INTO book(title, price) VALUE ('$title', $price)";

    mysqli_query($link, $query);

    header('Location: /books');

  } else {
    echo 'Bad request.';
  }
?>