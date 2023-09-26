<?php

function nama($nama, $alamat, $umur = null)
{
    echo "Perkenalkan nama saya " . $nama . " Saya tinggal di ".$alamat." <br>";
    echo "Umur saya ". $umur . "<br>";
};

nama('Chalvin','Waena',20);
nama('Samuel','Sentani',21);
nama('Korius','Waena',22);
nama('',''); 


?>