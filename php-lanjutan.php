<?php
/*
$nama = "Devi";

echo $nama;
echo "<br/>";
echo $nama;
echo "<br/>";
echo $nama;
echo "<br/>";
echo $nama;
echo "<br/>";
echo $nama;
echo "<br/>";
*/
// Perulangan
/*
$no = 100;
for ($i=0; $i<$no; $i++) {
    $n = $i + 1;
    echo $n." ".$nama."<br/>";
}
*/

/*
$no = 10;
$i = 0;
while ($i < $no) {
     $n = $i + 1;
    echo $n." ".$nama."<br/>";
    $i++;
}
*/

/*
$no = 10;
$i = 0;
do {
    $n = $i + 1;
    echo $n." ".$nama."<br/>";
    $i++;
} while ($i < $no)
*/
 /*
$data = array('Avanza', 'Lamborghini', 'Tesla', 'Xenia', 'XPander', 'Rubicon');
$i = 0;
while ($i < count($data)) {
    echo $data[$i]."<br>";
    $i++;
}
*/
// echo $data[5];

/*
foreach($data as $value) {
    echo $value."<br>";
}
*/

// PERCABANGAN
/*
if ($nama == "Putu") {
    echo $nama." adalah orang Bali";
} else if($nama == "Budi") {
    echo $nama." berasal dari pulau Jawa";
} else {
    echo $nama." darimana ya?";
}
*/
/*
switch($nama) {
    case "Putu":
        $pesan = $nama." adalah orang Bali";
    break;
    case "Budi":
        $pesan = $nama." berasal dari pulau Jawa";
    break;
    default:
        $pesan = $nama." darimana ya?";
}
echo $pesan;
*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .h1{
            color: #0c8323;
        }
        
    </style>
</head>
<body>
<h1 class="h1">Input nama dan diulang</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <label>Nama</label>
        <input type="text" name="nama">
        <label>Jumlah</label>
        <input type="text" name="no">
        <div>
        <br>
        <input type ="submit" name="submit" value="Submit">
    </div>
    </form>
    <?php
       if(!empty($_POST['submit'])) {

        switch($_POST['nama']) {
            case "Putu":
                $pesan = $_POST['nama']." adalah orang Bali";
            break;
            case "Budi":
                $pesan = $_POST['nama']." berasal dari pulau Jawa";
            break;
            default:
                $pesan = $_POST['nama']." darimana ya?";
        
        }

        for ($i=0;$i<$_POST['no'];$i++) {
            echo $pesan."<br>";
        }

    } else {
        echo "Anda belum input nama dan jumlah.";
    }
    ?>
    
</body>
</html>
