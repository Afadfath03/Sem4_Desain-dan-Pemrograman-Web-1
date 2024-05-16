<?php include '_component/header.php';?>
<section class="container">
        <div class="row">
            <div class="card-group">
                <?php
                if (isset($_GET["Id"])) {
                    $sql = 'SELECT * FROM berita WHERE id_berita = "' . $_GET["Id"] . '"';
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
                                        echo '<p><pre>' . $konten . '</pre></p>';
                        }
                        ?>
                                    <hr>
                                    <a class="btn btn-primary" href="../page/page.php?mod=home">Home</a>
                                </p>
                            </div>
                        </div>
                        <?php
                    } else {
                        ?>
                        <div class="container">
                            <p class="fw-bold text-center">Result Not Found</p>
                        </div>
                        <?php
                    }
                } else {
                    ?>
                    <div class="container">
                        <p class="fw-bold text-center">Result Not Found</p>
                    </div>
                    <?php
                }
                mysqli_close($conn);
                ?>
            </div>
        </div>
    </section>
    <?php include '_component/footer.php';?>