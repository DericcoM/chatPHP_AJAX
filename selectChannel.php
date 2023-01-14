<?php include 'createChat.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css?ver=<?php echo time()?>">
    <title>SelectChannel</title>
</head>
<body>

  <div class="container">
    <div class="channel__card">
        <a href="#add__offer" class="new__channel"></a>
    </div>
      <?php
      $link = mysqli_connect("localhost", "root", "root", "chat");
      $result = mysqli_query($link, "SHOW TABLES");

      while ($row = $result->fetch_assoc()) {
          echo '
            <a href="/lab_3/main.php" class="channel__card">
                <p>'. $row['Tables_in_chat'] .'</p>
            </a>
          ';
      }
      ?>


  </div>

  <div id="add__offer">
      <div id="add__offer_window">
          <form action="createChat.php" method="post">
              <input type="text" name="channel_name" placeholder="Введите название канала">
              <button class="input_submit" type="submit" name="add">Создать</button>
              <a href="#" class="offer__news">Закрыть</a>
          </form>

      </div>
  </div>

</body>
</html>