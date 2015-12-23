<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Read Products</title>

  <link href="bootstrap/css/bootstrap.css" rel="stylesheet" media="screen" />
  <link href="CSS/main.css" rel="stylesheet" media="screen" />
</head>
<body>
  <div class="container">
      <div class='page-header'>
        <div class='margin-bottom-1em overflow-hidden'>
            <!-- when clicked, it will show the product's list -->
            <div id='read-products' class='btn btn-primary pull-right display-none'>
                <span class='glyphicon glyphicon-list'></span> Read Products
            </div>

            <!-- when clicked, it will load the create product form -->
            <div id='create-product' class='btn btn-primary pull-right'>
                <span class='glyphicon glyphicon-plus'></span> Create Product
            </div>

            <!-- this is the loader image, hidden at first -->
            <div id='loader-image'><img src='IMG/ajax-loader.gif' /></div>
        </div>
        <h1 id='page-title'>Read Products</h1>
      </div>
      <div id='page-content'></div>
  </div>

  <script src="js/jquery.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <script src="JS/main.js"></script>
</body>
</html>
