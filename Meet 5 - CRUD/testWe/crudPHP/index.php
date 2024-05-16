<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD PHP</title>
    <!-- icon -->
    <link rel="icon"
        href="data:image/jpeg;base64,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"
        type="image/x-icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>
    <?php include 'config/koneksi.php' ?>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">IT Telkom Purwokerto</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Berita</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <section class="container">
        <div class="row">
            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner w-100 h-75">
                    <?php
                    $sql = "SELECT * FROM slider";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            if ($row["id_slider"] == 2) {
                                ?>
                                <div class="carousel-item active">
                                    <img src="<?php echo $row["ukuran"] ?>" class="d-block w-100" alt="...">
                                </div>
                                <?php
                            } else {
                                ?>
                                <div class="carousel-item">
                                    <img src="<?php echo $row["ukuran"] ?>" class="d-block w-100" alt="...">
                                </div>
                                <?php
                            }
                        }
                    } else {
                        echo "0 results";
                    }
                    ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="row">
            <h1 class="text-center">Berita</h1>
            <div class="card-group">
                <?php
                $sql = "SELECT * FROM berita";
                $result = mysqli_query($conn, $sql);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {

                        ?>
                        <div class="card">
                            <img src="<?php echo $row["gambar"] ?>" class="card-img-top h-100 w-100"
                                alt="https://placehold.co/200x100">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row["judul"] ?></h5>
                                <p class="card-text">
                                    <?php
                                    $konten = $row["konten"];
                                    $id = $row["id_berita"];
                                    $txtLimit = 100;
                                    if (strlen($konten) > $txtLimit) {
                                        $txtext = substr($konten, 0, $txtLimit);
                                        echo $txtext . "... <br>";
                                    } else {
                                        echo $konten;
                                    }
                                    echo "<hr>";
                                    echo '<a class="btn btn-primary" href="full_content.php?Id=' . $id . '">Baca Selengkapnya</a>';
                                    ?>
                                </p>
                            </div>
                        </div>
                        <?php
                    }
                } else {
                    echo "0 results";
                }
                mysqli_close($conn);
                ?>
            </div>
        </div>
    </section>

    <script src="js/bootstrap.bundle.jss"></script>
</body>

</html>