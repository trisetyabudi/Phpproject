<?php 
    // echo "Belajar php";
    // echo '<br>';
    // echo'Saya Siswa SMK';
    // echo'<h1 style="background-color:red">Belajar Php Itu mudah</h1>';
    // echo'Saya belajar php'.'PHP'.'<br>';
    // echo 'Tahun 2019'.'<br>';
    // echo 2019 +2;

        // $tulisan='Saya Belajar php';
        // echo $tulisan.'<br>';
        // $angka= 2025;
        // echo 'Tahun '.$angka.'<br>';
        // var_dump($tulisan);
        // echo'<br>';
        // var_dump($angka);

    // function tulisan(){
    //     echo 'Saya Belajar Php';

    // }
    // tulisan();
    // echo '<br>';

    // function luaspersegi($p=5,$l=10){
       
    //     echo $luas=$p*$l;
    // }
    // luaspersegi(10,4);

    // Fungsi IF
                // $nilai= 60;
                
                // if ($nilai>=70) {
                //     echo 'Anda Lulus';
                // } else {
                //     echo 'Anda Tidak Lulus';
                // }
echo '<br>';
                // if ($nilai> 0 && $nilai<=100) {
                //     if ($nilai>=90) {
                //         echo 'A';
                //         }  
                //     else if ($nilai>=80 ){
                //         echo 'B';
                //         } 
                //      else if ($nilai>=70 ){
                //         echo 'C';
                //         }  
                //      else if ($nilai>=60 ){
                //         echo 'D';
                //         }   
                //     else {
                //         echo 'E';
                //         }

                   
                // }
                // else {
                //     echo 'Nilai Anda Tidak Valid';
                // }
                
echo '<br>';
                // Switch Case

                $hari= 6;

                switch ($hari) {
                    case 1:
                        echo 'Minggu';
                        break;
                    case 2:
                        echo 'Senin';
                        break;
                    case 3:
                        echo 'Selasa';
                        break;
                    case 4:
                        echo 'Rabu';
                        break;
                    case 5:
                        echo 'Kamis';
                        break;
                    case 6:
                        echo 'Jumat';
                        break;
                    case 7:
                        echo 'Sabtu';
                        break;
                    
                    default:
                        echo 'Tidak ada Nama hari lain';
                        break;
                }
echo '<br>';
            // Looping

                for ($i=1; $i <=10 ; $i++) { 
                    echo $i. ',';
                    echo '<br>';
                }

                echo '<br>';

                $a=1;
                while ($a <= 10) {
                    echo $a. '.';
                $a++;
                }

                echo '<br>';

                $b=1;
                 do {
                    echo $b. '.';
                    $b++;
                } while ($a <= 10);


?>
