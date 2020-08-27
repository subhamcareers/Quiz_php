<?php
include"../class/admin.php";
$cat=new admin;
$category=$cat->cat_shows();

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Administrator Page</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <link href="../css/dashboard.css" rel="stylesheet">
  </head>

  <body>
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">Online Quiz Portal</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a data-toggle="tab" class="nav-link" href="#menu">Home <span class="sr-only">(current)</span></a>
            </li>
 
    </header>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
          <ul class="nav nav-pills flex-column">
            <li class="nav-item">
              <a class="nav-link " href="#menu">Question<span class="sr-only">(current)</span></a>
            </li>
    
        </nav>

        <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
          <h1>Welcome to Quiz Admin Page</h1><br>
		  <br>
		  <?php
		  if(isset($_GET['msg']) &&!empty($_GET['msg']))
		  {
			  echo"<p>Data Insertion successful</p>";
		  }
		  ?>
			  <form method="post" action="add_quiz.php">
				<div class="form-group">
				  <label for="text">Questions</label>
				  <input type="text" class="form-control" name="qus" placeholder="Enter Question">
				</div> 
				<div class="form-group">
				  <label for="text">Option-1</label>
				  <input type="text" class="form-control" name="op1" placeholder="Option-1">
				</div>
				<div class="form-group">
				  <label for="text">Option-2</label>
				  <input type="text" class="form-control" name="op2" placeholder="Option-2">
				</div>
				<div class="form-group">
				  <label for="text">Option-3</label>
				  <input type="text" class="form-control" name="op3" placeholder="Option-3">
				</div>
			  <div class="form-group">
				  <label for="text">Option-4</label>
				  <input type="text" class="form-control" name="op4" placeholder="Option-4">
				</div>
				<div class="form-group">
				  <label for="text">Answer</label>
				  <input type="text" class="form-control" name="ans"id="email" placeholder="Enter Answer">
				</div>
				<div>
					<div class="col-sm-10">
						<select class="form-control" id="sell" name="cat">
						
						<option value="">Select Category</option>
						<?php
						foreach($category as $cat)
						{
							echo "<option value=".$cat['id'].">".$cat['cat_name']."</option>";
						}
						?>
					
						</select><br>
					</div>
				</div>
		
				<button type="submit" class="btn btn-default">Submit</button>
				</form>
			</div>
              </tbody>
            </table>
          </div>
        </main>
      </div>
    </div>

   
   
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../js/vendor/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
  </body>
</html>
