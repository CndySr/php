<html>

<head>
    <title>belajar array</title>
</head>

<body>
    <h1>belajar array di php</h1>
    <hr>

    <?php
    //array adalah struktur data yang memiliki sekumpulan data dan memiliki index
    //cara membuat array
    $produk = array("mouse", "keyboard", "monitor");
    //cara menambahkan data ke dalam array
    $produk[] = "mouse pad";
    $produk[] = "cpu";

    print_r($produk) . "<br>";
    //count digunakan untuk menghitung jumlah data array
    echo count($produk) . "<br>";
    echo $produk[0];


    ?>

</body>

</html>