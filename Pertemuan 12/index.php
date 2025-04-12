<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To PHP</title>
</head>
<body>
    <?php echo "<h1>Welcome to my First Website with PHP</h1>"; ?>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
    <p>My Name is <?php echo "<b> Vionetha Lavega </b>"; ?></p>
    <hr/>
    <h4>Menulis Variabel di PHP</h4>
    <?php
        //Variabel Dinamis 
        $nama = "Vionetha Lavega"; //string
        $umur = 20; //number
        $perempuan = true; //boolean
        $saldo = null; //null
        $hobby = ["Memancing", "Berenang", "Berlari"];
        $makanan_fav = array("Model", "Bakso", "Pempek"); //array
        #ini juga komentar 
        #kalau mau nampilin pake echo 
            # echo $nama;

        //Variabel Statis
        const PI = 3.14;
        echo "Nilai PI = " . PI; //ini harus pake , atau gak . kalau pake + akan error
        echo "<br/>"; //untuk pindah baris
        echo "Umur = $umur";
        echo "<br/>";
        echo "Hobi 1. $hobby[0]"; //Menampilkan hobby index ke 0

        echo "<br/>";

        //menampilkan semua nilai array (contohnya hobby) 
        //contoh ini juga termasuk perulangan
        foreach ($hobby as $key => $value){
            echo "Hobi " .($key+1)." = $value <br/>";
        }

        $saldo = 1000; //dollar
        //tampilkan symbol dollar ($) menggunakan echo
        echo "Saldo = \"\$$saldo USD\""; 
    
    ?>

</body>
</html>
