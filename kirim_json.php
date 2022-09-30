<!DOCTYPE html>
<head>
    <title>PHP | WEEK 2</title>
</head>
<body onload="lakukan()">
    <form action='terima.php' method='POST' id='formulir'>
    <?php
    echo "<div id='semua'>";
    $jumlahItem = 3;
    for($i = 0; $i < $jumlahItem; $i++){
        echo "<div id='isian1$i' class='isian$i'>\n";
        echo "Jenis <input type='text' name='jenis$i' id='jenis1$i'><br>\n";
        echo "Jumlah <input type='text' name='Jumlah$i' id='jumlah1$i'><br>\n";
        echo "</div>\n";
        echo "<br>\n\n";
    }
    ?>
        <input type='hidden' name='kiriman' value='sembarang'>
    </form>
    <br>
    <button id="kirim_btn">Siapkan dan Kirimkan</button>
</body>
<script>
    function pites()
    {
        f = document.querySelector('#formulir');
        //Validasi ETC

        isianX = document.querySelectorAll('.isian');
        for(i in isianX)
        {
            item = isianX[i];
            for(j in item)
            {
                if(item[j].tagName=='INPUT')
                {
                    jenis = item.querySelectorAll('input')[0].value;
                    console.log(jenis);
                }
            }
        }

        //valid = 1;
        //if(valid) f.submit();
    }
    function jalankan()
    {
        document.querySelector('#kirim_btn').onclick = pites;
    }
    function lakukan()
    {
        jalankan();
    }
</script>
</html>