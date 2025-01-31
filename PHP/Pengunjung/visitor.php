<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../../CSS/ListofBooks.css">
    <link rel="stylesheet" href="../Font/fonts.css">

    <title>Pengunjung</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container-fluid">
        <div class="logo">
					<a href ="../Intro.php" title="Back to main menu">
					<p>Perpustakaan<br>Mantap</p>
					</a>
				</div>
        <!-- <a class="navbar-brand col-sm-2 text-monospace" href="#">Movieku</a> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link" href="../Books/ListofBooks.php">Buku</a>
            <a class="nav-item nav-link active" href="visitor.php">Pengunjung</a>
            <a class="nav-item nav-link" href="../Pinjaman/borrowes.php">Pinjaman</a>
          </div>
        </div>
      </div>
    </nav>

    <section>   
        <div class="container">
            <div class="row pt-5">
                <div class="col-12 pt-3">
                    <h1 class="text-center">Pengunjung Perpustakaan</h1>
                    <br><br>
                </div>
                <a type="button" href= "AddVisitor.php" class="btn btn-outline-secondary">Add</a>
                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Date</th>
                            <th scope="col">Time</th>
                            <th scope="col">Visitor Name</th>
                            <th scope="col">Detail</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>21/11/2020</td>
                            <td>19.08</td>
                            <td>Mark Otto</td>
                            <td><a type="button" href="visitorDetail.php" class="btn btn-primary btn-sm">Detail</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>21/11/2020</td>
                            <td>19.09</td>
                            <td>Jacob Thornton</td>
                            <td><a type="button" href="visitorDetail.php" class="btn btn-primary btn-sm">Detail</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>  
    </section>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>