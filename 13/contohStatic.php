<?php
// class ContohStatic
// {
//     public static $angka = 1;

//     public static function halo()
//     {
//         return "Halo " . self::$angka++ . " kali";
//     }
// }

// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::halo();
// echo "<hr>";
// echo ContohStatic::halo();

class Contoh{
    //static akan tetap meskipun diinstansiasi berulang kali
    public static $angka = 1;

    public function halo(){
        return "Halo " . self::$angka++ . " kali";
    }
}

$obj = new Contoh;
echo $obj->halo() . "<br>";
echo $obj->halo() . "<br>";
echo $obj->halo();

echo "<hr>";

$obj = new Contoh;
echo $obj->halo() . "<br>";
echo $obj->halo() . "<br>";
echo $obj->halo();