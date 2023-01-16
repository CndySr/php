<html>

<head>
    <title>belajar operator</title>
</head>

<body>
    <?php
    $nilai_a = 10;
    $nilai_b = 20;

    //penjumlahan
    $hasil = $nilai_a + $nilai_b;
    $hasil1 = $nilai_b - $nilai_a;
    $hasil2 = $nilai_a * $nilai_b;
    $hasil3 = $nilai_b / $nilai_a;


    ?>
    <b>Nilai A=10</b>
    <br>
    <b>Nilai B =20</b>
    <br>
    <p>
        <b><?php echo "hasil penjumlahan nilai a dengan nilai b =" . $hasil ?></b>
    </P>
    <P>
        <b><?php echo "hasil pengurangan nilai b dengan nilai a =" . $hasil1 ?></b>
    </P>
    <P>
        <b><?php echo "hasil perkalian nilai a dengan nilai b =" . $hasil2 ?></b>
    </P>
    <P>
        <b><?php echo "hasil pembagian nilai b dengan nilai a =" . $hasil3 ?></b>
    </P>

    <?php

    $a = 2;
    $b = 3;

    $hasilbagi = $a % $b;
    $pangkat = $a ** $b;
    echo "2 pangkat 3 =" . $pangkat;
    echo "<br>hasil bagi 7/3 =" . $hasilbagi;

    ?>

</body>


</html>