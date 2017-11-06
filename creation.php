<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <link href="https://fonts.googleapis.com/css?family=Kalam" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Saira+Semi+Condensed" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  <script src="js/bootstrap.min.js" charset="utf-8"></script>
  <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/menu.css">
  <link rel="stylesheet" href="css/master.css">
  <link rel="stylesheet" href="css/creation.css">
  <title>Creation Veille</title>
</head>

<body>
  <header>
    <?php include('menu.php'); ?>
  </header>

  <section class="content">

    <form class="col-lg-8 col-lg-offset-2" action="#" method="post">
      <div class="form-group">
        <label for="text" class="lTitre">Titre:</label>
        <input type="text" class="form-control" id="vTitre">
      </div>
      <div class="form-group">
        <textarea id="snVeille" class="form-control" name="name" rows="8" cols="80">
        </textarea>
      </div>
      <div class="form-group">
        <button type="button" name="button" class="btn bcrVeille">Ajouter</button>
      </div>
    </form>

    <script type="text/javascript">
      $(document).ready(function() {
        $('#snVeille').summernote({
          height: 300,
        });
      });
    </script>
  </section>
</body>

</html>
