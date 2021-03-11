<!doctype html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Aritmatika</title>
        <link rel="stylesheet" href="assets\css\aritmatika.css">
        <script src= "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    </head>

    <!-- Awal Isi Menu Sign In -->
    <body>

        <form action="aritmatikafix.php" class="aritmatika-form" method="GET">
            <div class="sidebar"><h1>Deret Aritmatika</h1></div>
            

            <div class="txtb">
                <input type="number" name="inp1">
            <span data-placeholder="Input Bilangan Pertama"></span>  
            </div>

            <div class="txtb">
                <input type="number" name="inp2">
                <span data-placeholder="Beda"></span>
            </div>

            <div class="txtb">
                <input type="number" name="ke">
                <span data-placeholder="Suku-ke"></span>
            </div>

            
            <input type="submit" class="submit" value="Submit" name="hitung">

            <?php 

                if(isset($_GET['hitung']))
                {
                    $awal= $_GET['inp1'];
                    $beda = $_GET['inp2'];
                    $n = $_GET['ke'];

                    $output = $awal + ($n - 1)* $beda;
                    echo "suku ke- $n bilangan tersebut adalah $output  <br>" ;
                    
                    $hasil= $awal + $beda;
                    echo "barisan angkanya : $awal $hasil";

                    for ($i=$awal; $i<=8; $i++)
                    {

                    $output = $hasil+$beda;
                    echo " $output";
                    
                    $awal = $hasil;
                    $hasil = $output;
                    }

                    
                }

            ?>

        </form>
    </body>
  ...
</html>