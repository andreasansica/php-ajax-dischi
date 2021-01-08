<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
  </head>
  <?php
    require_once "data.php";
   ?>
  <body>

    <header>

    </header>

    <div id="app">
      <div class="container">
        <?php
          foreach ($database as $key => $dischi) {

            ?>
              <div class="dischi">
                <img src="<?php echo $dischi["poster"] ?>" alt="">

                <div class="titolo">
                  <?php echo $dischi["title"] ?>
                </div>

                <div class="autore">
                  <?php echo $dischi["author"] ?>
                </div>

                <div class="year">
                  <?php echo $dischi["year"] ?>
                </div>

              </div>


            <?php
          }
         ?>
      </div>
    </div>






    <script src="script.js"></script>
  </body>
</html>
