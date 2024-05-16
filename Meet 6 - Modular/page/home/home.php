<?php include '_component/header.php';?>
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
                                    echo '<a class="btn btn-primary" href="../page/page.php?mod=berita_detail&Id=' . $id . '">Baca Selengkapnya</a>';
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
<?php include '_component/footer.php';?>