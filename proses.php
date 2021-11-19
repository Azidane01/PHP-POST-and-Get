<?php 
if(isset($_POST['fnama']))
{
    $fnpm = $_POST['fnpm'];
    $fnama = $_POST['fnama'];
    $lalamat = $_POST['lalamat'];
    $jurusan = $_POST['jurusan'];
    echo "<span class='success'>Dengan <b>METODE POST</b></span><br/>";
    echo "<br/> NPM : " .$fnpm. "<br/>Nama : ".$fnama."<br/>Alamat : ".$lalamat."<br/> Jurusan : " .$jurusan;
    }
//--------------------------------------------------------------------
if(isset($_GET['fnama']))
{
$fnpm= $_GET['fnpm'];
$fnama = $_GET['fnama'];
$lalamat = $_GET['lalamat'];
$jurusan = $_GET['jurusan'];
echo "<span class='success'>Dengan <b>METODE GET</b></span><br/>";
echo "<br/> NPM : " .$fnpm. "<br/>Nama : ".$fnama."<br/>Alamat : ".$lalamat."<br/> Jurusan : " .$jurusan;
}
?>