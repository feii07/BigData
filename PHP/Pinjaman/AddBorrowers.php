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
            <form name="formCreate" action="/createEmployee" method="POST">
                <div class="row">
                    <div class="col-sm-12 py-2">
                        <h5>Add Visitor</h5>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="Kategori">NIK</label>
                        <select class="custom-select" id="Kategori" required>
                            <option selected disabled value="">--Pilih NIK--</option>
                            <option>...</option>
                        </select>
                    </div>

                    <div class="col-md-3 mb-3">
                        <label for="Kategori">Judul Buku</label>
                        <select class="custom-select" id="Kategori" required>
                            <option selected disabled value="">--Pilih Buku--</option>
                            <option>...</option>
                        </select>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="TglPinjam">Tanggal Pinjam</label>
                        <input type="text" class="form-control" id="TglPinjam" value="21-11-2020" required>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="TglBalik">Tanggal Kembali</label>
                        <input type="text" class="form-control" id="TglBalik" value="28-11-2020" required>
                    </div>
                </div>
        </div>
        <center>
            <button class="btn btn-primary" type="submit">Add</button>
        </center>
        </form>

        </div>
    </section>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


</body>

</html>