<?php
if (isset($_POST['simpan'])) {
    $bintang = $_POST['jb'];

for($a=1; $a<=$bintang; $a++){
    for($b=$bintang; $b>=$a; $b-=1){
        print('&nbsp');
    }
    for($c=1; $c<=$a; $c++){
        echo '*';
    }
    echo "<br/>";
}
}
    echo "Jumlah Bintang : <b>$bintang</b>";
?>