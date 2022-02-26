<!DOCTYPE html>
<body>
    <?php
    $ar_buah = ["p"=>"Pepaya","a"=>"Apel","m"=>"Mangga","j"=>"Jambu"];
    echo "<ol>";
    foreach ($ar_buah as $buah => $v) {
        echo "<li> $buah - $v </li>";
    }
    echo "</ol>";
    // Array sort mengurutkan array dalam urutan menaik
    sort ($ar_buah);
    echo "<hr/>";
    echo "</ol>";
    echo "<ol>";
    foreach ($ar_buah as $buah => $k) {
        echo "<li> $buah - $k </li>";
    }
    echo "</ol>";
    // array arsort mengurutkan array assosiatif dalam urutan menurun, sesuai dengan nilai nya
    arsort ($ar_buah);
    echo "<hr/>";
    echo "</ol>";
    echo "<ol>";
    foreach ($ar_buah as $buah => $k) {
        echo "<li> $buah - $k </li>";
    }
    echo "</ol>";
    echo "<hr>";
    ?>
    <?php 
    // array pop berguna untuk menghapus nilai terakhir dalam sebuah array kita bisa menggunakan fungsi ini, jadi fungsi array_pop kita menghapus data terakhir dari sebuah array
    $tims = ["erwin","heru","ali", "zaki"];
    array_pop($tims);
    foreach ($tims as $person) {
        echo $person. '<br/>';
    }
    echo "<hr>";
    ?>

    <?php 
    // array Push berguna untuk Menambahkan nilai ke dalam data array terakhir, dalam sebuah array kita bisa menggunakan fungsi ini, jadi fungsi array_push kita bisa menambahkan data terakhir dari sebuah array
    $tims = ["erwin","heru","ali", "zaki"];
    array_push($tims, "wati");
    foreach ($tims as $person) {
        echo $person. '<br/>';
    }
    echo "<hr>";
    ?>

    <?php
    $tims = ["erwin","heru","ali", "zaki"];
    // fungsi dari sebuah array_shift adalah menghapus nilai awal dari sebuah data array, seperti contoh di bawah ini
    array_shift($tims);
    foreach ($tims as $person) {
        echo "<br/>$person";
    }
    echo "<hr>";
    ?>
    
    <?php
    $tims = ["erwin","heru","ali", "zaki"];
    // fungsi dari sebuah array_shift adalah menambah nilai array satu atau lebih elemen ke dalam suatu array, tapi method ini menambahkannya ke awal/depan array yang dalam dunia komputer juga sering disebut sebagai prepend, seperti contoh di bawah ini
    array_unshift($tims,"joko","wati");
    foreach ($tims as $person) {
        echo "<br/>$person";
    }
    ?>
</body>
</html>