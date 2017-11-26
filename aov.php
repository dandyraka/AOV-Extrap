<?php
error_reporting(0);
function Ngacak($length) {
    $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function Loop($jumlah = 20){
	for ($i = 0; $i < $jumlah; $i++) {
        $result .= "CMAZC".Ngacak(7)."<br>";
    }
	return($result);
}
echo '<center>'.Loop().'<br><br><INPUT TYPE="button" onClick="history.go(0)" VALUE="Acak Lagi"></center>';
?>
