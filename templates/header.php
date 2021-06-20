<!--Header-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Junior Developer Test</title>
    <!--Bootstrap necessity-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<link rel="stylesheet" href="templates/styles.css">
<body>
  
<nav class="navbar border-bottom">
<a href="index.php" class="navbar-brand btn-lg p-2 bd-highlight">
      <img src="templates/images/CST.PNG" width="auto" class="headerpic" alt=""></a> 

<h2 style="text-align: center">Web Project</h2>

<div class="buttons" style="display: grid; gap: 10px;">
<a href="add.php" class = "btn btn-lg p-2 bd-highlight">Add a product</a> 
<!--Ternary operator to disable the delete button if the user is not on products list page-->
<button class="btn p-2 btn-lg bd-highlight" type="submit" name = "delete" form="delete" <?php echo (strpos($_SERVER['REQUEST_URI'], 'index.php')) ? "" : "Disabled";?>>Delete product</button>
</div>

</nav>