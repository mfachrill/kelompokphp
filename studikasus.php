<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>studi kasus</title>
</head>
<body>
    <form action="" method = "post">
        <p>masukkan no buku yang ingin di cari</p>
        <p>yang tertera disni hanya no 1-4</p>
        <input type="text" name = "number">
        <button type = "submit" name = "KIRIM">Klik</button>
    </form>
    <?php 
    if(isset($_POST["KIRIM"])) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $a = ($_POST['number'] == 1);
        $b = ($_POST['number'] == 2);
        $c = ($_POST['number'] == 3);
        $d = ($_POST['number'] == 4);
        $e = ($_POST['number'] >  5);

        if ($a == 1){
            echo "Buku agama";
        }elseif($b == 2){
            echo "Buku MTK";
        }elseif($c == 3){
            echo "Buku B.inggris;";
        }elseif($d == 4){
            echo "Buku Ipa";
        }else{
            echo "buku yang kamu cari tidak ada";
        }
    }
}
    ?>
</body>
</html>