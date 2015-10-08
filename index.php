<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Aplikasi Tukar Nilai</title>
        <LINK href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body class="body">
        <h1 align="center" class="tulisan">Aplikasi Menukar Dua Variabel </h1>
       <?php
            class SwapClass{
                
                public $a; 
                public $b;
                
                public function Swap($a,$b){
                    
                    //Berikut ini algoritma untuk swap 
                    
                    $a=$a+$b;       //1. jumlahkan dahulu nilai a dan b 
                    $b=$a-$b;       //2. kurangkan nilai a dan b 
                    $a=$a-$b;       //3. kurangkan nilai a dan b
                    
                    echo '<p font face="arial" align="center">Nilai a = '.$a."<br>";    // print nilai a
                    echo 'Nilai b  = '.$b."<br>";    //print nilai b
                }
                
                public function tampil()
                {
                        echo '<form method="post">';
                        echo '<p font face="arial" align="center">Nilai a  &nbsp;&nbsp;<input type="text" name="a"/> ';
                        echo "<br> <br>".'Nilai b  &nbsp;&nbsp;<input type="text" name="b"/>';
                        echo "<br> <br>".'<input type="submit" value="Tukar" name="submit"/>';
                        echo '&nbsp;&nbsp;<input type="reset" value="Reset" name="reset"/>';
                        echo '</form>';
                }
                
                
                
            }

                $object = new SwapClass();
                $object->tampil();
                

                if (isset($_POST['submit'])) {
                  $a = $_POST['a'];
                  $b = $_POST['b'];

                  
                   $object->Swap($a,$b)."<br /><br />";
                }
                  
                
       ?>
        
    </body>
</html>
