<!DOCTYPE html>
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
    <div class="container">
        <div class="row pt-5">
            <div class="col-12 pt-3">
                <h1 class="text-center">Visitor Detail</h1>
            </div>
            <div class="col-12 col-md-6">
                <p class="font-weight-bold">Detail</p>
                <p>NIK: 000</p>
                <p>Nama: Cynthia</p>
                <p>Pekerja: UI/UX</p>
                <p>No. Telp:08562393298</p>
                <p>Email: Cyn@gmail.com</p>
            </div>
        </div>
    </div>
    <div class="row justify-content-center pt-5 pb-3">
        <a name="" id="" class="btn btn-outline-success btn-lg mr-2" href="#" role="button">Edit</a>
        <a name="" id="" class="btn btn-outline-danger btn-lg ml-2" data-toggle="modal" data-target="#staticBackdrop"
            href="#" role="button">Delete</a>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Hapus Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Yakin akan menghapus data ini??
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger">Hapus</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>

</html>