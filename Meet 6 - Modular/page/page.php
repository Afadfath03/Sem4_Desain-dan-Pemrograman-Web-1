<?php
if($_GET['mod'] == 'home'){
    include 'home/home.php';
} else if ($_GET['mod'] == 'berita') {
    include 'berita/berita.php';    
} else if($_GET['mod'] == 'berita_detail'){
    include 'berita/berita_detail.php';
}

?>