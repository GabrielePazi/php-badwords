<?php
?>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
  <title>Php Badwords</title>
</head>

<body>

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-8">
        <h1 class="my-3">Censura una parola in un testo</h1>
        <form action="index2.php" method="GET">
          <div class="my-5">
            <label for="exampleFormControlInput1" class="form-label">Badword</label>
            <input name="badword" class="form-control" id="exampleFormControlInput1" placeholder="Es. 'culo'">
          </div>
          <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Paragrafo da censurare</label>
            <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <button class="btn btn-primary" type="submit">Send</button>
        </form>
      </div>
    </div>
  </div>

</body>

</html>