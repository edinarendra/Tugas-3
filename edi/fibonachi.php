<!doctype html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Fibonachi</title>
        <link rel="stylesheet" href="assets/css/fibonachi.css">
        <script src= "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
    </head>

    <!-- Awal Isi Menu Sign In -->
    <body>

        <form action="fibonachi.php" class="fibonachi-form" method="POST">
            <h1>Deret Fibonachi</h1>

            <div class="txtb">
                <input type="number" name="inp1">
            <span data-placeholder="Input Bilangan Pertama"></span>  
            </div>

            <div class="txtb">
                <input type="number" name="inp2">
                <span data-placeholder="Input Bilangan Kedua"></span>
            </div>

            <div class="txtb">
                <input type="number" name="jml">
                <span data-placeholder="Jumlah Bilangan"></span>
            </div>

            
            <input type="submit" class="submit" value="Submit" name="hitung">

            <?php 

                if (isset($_POST['hitung']))
                {
                    $b1 = $_POST['inp1'];
                    $b2 = $_POST['inp2'];
                    $jumlah = $_POST['jml'];
                    
                    echo "hasil : $b1 $b2"; // digunakan untuk menampilkan 2 bilangan awal
                    
                    for ($i=$b1; $i<=$jumlah; $i++)
                    {

                    $output = $b2 + $b1;
                    echo " $output";
                    
                    $b1 = $b2;  // reset bilangan pertama jadi bilangan kedua dst
                    $b2 = $output; // bilangan kedua jadi bilangan yg baru
                    }

                } 

            ?>

        </form>
    </body>
  ...
</html>