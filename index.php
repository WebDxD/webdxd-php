<html>
  <head>
    <link rel="stylesheet" href="css/style.css">
  </head>

  <body>
    <?php

      $link = mysqli_connect('localhost', 'root', 'root', 'book_db');
      
      $query = "SELECT * FROM book";

      $result = mysqli_query($link, $query);

      if (mysqli_num_rows($result) > 0) {
        echo mysqli_num_rows($result)." Books Found.";
        echo "<br />";

        while($row = mysqli_fetch_assoc($result)) {
          echo "<h1 class='red'>" . $row["title"] . "</h1>";
          echo "<br />";
        }

      } else {
        echo "Books Not Found.";
      }

    ?>

    <form action="new-book.php" method="POST">
      <label for="title">Title</label>
      <br>
      <input type="text" name="title" required>
      <br>
      <label for="price">Price</label>
      <br>
      <input type="number" name="price" required>
      <br>
      <input type="submit" value="Submit">
    </form>
  </body>

</html>