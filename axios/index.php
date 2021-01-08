<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <!-- <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> -->
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"> -->
  <link rel="stylesheet" href="../style.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" -->
          <!-- integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ=="
          crossorigin="anonymous"></script> -->
  <title>Dischi musicali</title>
</head>

<body>
  <header>

  </header>

  <div id="app">
    <div class="container">
      <div class="dischi" v-for="disco in dischi">
          <img :src="disco.poster" alt="">
          <div class="titolo">
            {{disco.title}}
          </div>
          <div class="autore">
            {{disco.author}}
          </div>
          <div class="year">
            {{disco.year}}
          </div>
      </div>
    </div>
  </div>


<script src="script.js"></script>
</body>

</html>
