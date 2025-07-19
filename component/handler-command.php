<?php
require_once "../component/connect.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name_komentar = mysqli_real_escape_string($conn, $_POST["name_comment"]);
    $komentar = mysqli_real_escape_string($conn, $_POST["comment"]);
    $jurusan = mysqli_real_escape_string($conn, $_POST["jurusan"]);
    $view = mysqli_real_escape_string($conn, $_POST["view"]);

    $query = "INSERT INTO `komentar`(`nama_komentar`, `komentar`, `jurusan`) VALUES ('$name_komentar', '$komentar', '$jurusan')";
    $sql = mysqli_query($conn, $query);

    if ($sql) {
        if ($jurusan == 'teknik_otomotif') {
            header("Location: ../view/teknik-otomotif.php?view=$view");
        } else if ($jurusan == 'desain_komunikasi_visual') {
            header("Location: ../view/j-dekave.php?view=$view");
        } else if ($jurusan == 'animasi') {
            header("Location: ../view/j-animasi.php?view=$view");
        } else {
            header("Location: ../view/index.php");
        }
        exit;
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo "Invalid request method.";
}
?>
