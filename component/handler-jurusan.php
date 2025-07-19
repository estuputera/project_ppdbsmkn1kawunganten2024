<?php
include_once "../component/connect.php";

$idjurusan = $_GET['id'];

$query = "UPDATE `table_jurusan` SET view_jurusan = view_jurusan + 1  WHERE id= $idjurusan";
$sql = mysqli_query($conn,$query);

$query1 = "SELECT * FROM `table_jurusan` WHERE id = $idjurusan";
$sql1 = mysqli_query($conn,$query1);

if ($sql1->num_rows > 0) {
        while ($row = $sql1->fetch_assoc())  {

                $view = $row["view_jurusan"];

                if ($row["name_jurusan"] == "teknik_otomotif") {
                        header("Location: ../view/teknik-otomotif.php?view=$view");
                }
                else if ($row["name_jurusan"] == "desain_komunikasi_visual") {
                        header("Location: ../view/j-dekave.php?view=$view");
                } 
                else if ($row["name_jurusan"] == "animasi") {
                        header("Location: ../view/j-animasi.php?view=$view");
                }      

        }
}


?>