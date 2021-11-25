<?php
include_once('../../includes/connection.php');
include_once('../../includes/classArticle.php');
    $article = new Article();
    $articles=$article->fetch_all();
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IWP project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-dark bg-primary navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">IWP project</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="home.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" href="../../roadmap/r.html">Roadmaps</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../../cp/cp.html">Career Portals</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../../ip/ip.html">Interview prep</a>
              </li>
        
            
            </ul>
           
          </div>
        </div>
      </nav>
      <h1> Front-End <h1>
      <ol>
                <?php foreach ($articles as $article){ ?>
                <li>
                    <a href="../../articleView/article.php?id=<?php echo $article['article_id']?>">
                        <?php echo $article['article_title'];?>
                    </a>
                </li>
                <?php } ?>
      </ol>
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>