<?php
include "koneksi.php";

$kursi = $_POST['kursi'];
$id_movies = $_POST['id_movies'];
$waktu= $_POST['waktu'];
$tanggal = $_POST['tanggal'];
$total = $_POST['total'];

$query= false;

foreach ($kursi as $item) {
    
        $item = $koneksi->real_escape_string($item); 
        $sql = "INSERT INTO bookings (seats_booked,total_price,booking_date,booking_time,id_movies) VALUES ('$item','$total','$tanggal','$waktu','$id_movies')";;
        $koneksi->query($sql);
        $query = true;
        $bangku[] = $item;
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="print_tiket.php" method="post">
        <input type="hidden" name="id_movies" value="<?= $id_movies ?>">
        <input type="hidden" name="tanggal" value="<?= $tanggal ?>">
        <input type="hidden" name="waktu" value="<?= $waktu ?>" >
        <input type="hidden" name="total" value="<?= $total ?>">
        <?php foreach($bangku as $chair){ ?>
            <input type="hidden" name="kursi[]" value="<?= $chair ?>">
        <?php } ?>
    </form>

    <script>
    document.getElementById("formku").submit();
</script>
</body>
</html>
<?php

if($query){
    header("location:print_tiket.php?pembayaran=berhasil");
}
?>