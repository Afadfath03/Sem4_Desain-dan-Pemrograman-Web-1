<?php include '_component/header.php';?>
<div class="container">
    <div class="row">
        <div class="col text-center">
            <h1>Berita Terbaru</h1>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit</p>
        </div>
    </div>
    <hr>
</div>
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