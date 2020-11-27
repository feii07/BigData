<?php
require '../../Database/MongodbDatabase.php';

$db = new MongodbDatabase;
$isbn = $_GET['isbn'];
$penerbit = $db->getDataBookByISBN($isbn);

if(!empty($_POST['judul'])){

    $hasil = $db->updateBook([
        'isbn' => $isbn,
        'judul' => $_POST['judul'],
        'penulis' => $_POST['penulis'],
        'penerbit' => $_POST['penerbit'],
        'kategori' => $_POST['kategori'],

    ]);

    
}


?>

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

    <title>Edit Buku</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <div class="logo">
                <a href="../Intro.php" title="Back to main menu">
                    <p>Perpustakaan<br>Mantap</p>
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link active" href="ListofBooks.php">Buku</a>
                    <a class="nav-item nav-link" href="../Pengunjung/visitor.php">Pengunjung</a>
                    <a class="nav-item nav-link" href="../Pinjaman/borrowes.php">Pinjaman</a>
                </div>
            </div>
        </div>
    </nav>

    <section>
        <div class="container">
            <form name="formCreate" action="Edit.php?isbn=<?php echo $isbn ?>" method="POST">
                <div class="row">
                    <div class="col-sm-12 py-2">
                        <h5>Tambah Buku</h5>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="ISBN">ISBN</label>
                        <input type="text" class="form-control" id="ISBN" name="isbn" value="<?php echo $penerbit->buku->isbn ?>" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="Judul">Judul</label>
                        <input type="text" class="form-control" id="Judul" name="judul" value="<?php echo $penerbit->buku->isbn ?>" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="Penulis">Penulis</label>
                        <input type="text" class="form-control" id="Penulis" name="penulis" value="<?php echo $penerbit->buku->penulis ?>" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="Penerbit">Penerbit</label>
                        <input type="text" class="form-control" id="Penerbit" name="penerbit" value="<?php echo $penerbit->nama ?>"  required>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="Kategori">Kategori</label>
                        <!-- <select class="custom-select" id="Kategori" required>
                            <option selected disabled value="">--Pilih Kategori--</option>
                            <option>...</option>
                        </select> -->
                        <input type="text" class="form-control" id="kategori" name="kategori" value="<?php echo $penerbit->buku->kategori ?>" required>
                    </div>
                </div>
                <center>
                    <button class="btn btn-primary" type="submit">Post</button>
                </center>
            </form>


        </div>
    </section>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


</body>

</html>