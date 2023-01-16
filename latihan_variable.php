<html>

<head>
    <title>latihan variable php</title>
</head>

<body>
    <?php
    $nama = "sindi jesika sari";
    $kelas = "X1";
    $jurusan = "pengembangan perangkat lunak dan GIM(PPLG)";
    ?>
    <h1 style="color:red">BIODATA</h1>
    <hr>
    <table>
        <tr>
            <td>nama</td>
            <td>:</td>
            <td style="background-color: orange;"><?= $nama ?></td>
        </tr>
        <tr>
            <td>kelas</td>
            <td>:</td>
            <td><?= $kelas ?></td>
        </tr>
        <tr>
            <td>jurusan</td>
            <td>:</td>
            <td><?= $jurusan ?></td>
        </tr>
    </table>
    <hr>
    <i>latihan variable dengan php</i>

</body>


</html>