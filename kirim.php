<!DOCTYPE html>
<head>
    <title>PHP | WEEK 2</title>
</head>
<body>
    <form action="terima.php" method='POST'> <!-- method POST berfungsi agar data yang dikirim tidak muncul di URL -->
    <?php
        $jumlahItem = 3; //Inisialisasi variabel pada PHP
    ?>
    <?php
    for($i = 0; $i < $jumlahItem; $i++){
        echo "<div id='isian1$i' class='isian$i'>\n";
        echo "Jenis <input type='text' name='jenis$i' id='jenis1$i'><br>\n";
        echo "Jumlah <input type='text' name='Jumlah$i' id='jumlah1$i'><br>\n";
        echo "</div>\n";
        echo "<br>\n\n";
    }
    ?>
        <br>
        <input type="submit" value="KIRIM">
    </form>
</body>
</html>
