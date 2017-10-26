<?php 
setcookie('ABC', "stuff", time()+3600);
$user = "colin";
$password = "password";
$password2 = "password";

echo password_hash($password, CRYPT_BLOWFISH);
echo "<br>";
echo password_hash($password2, CRYPT_BLOWFISH);
echo "<br>";
$hash = password_hash($password, CRYPT_BLOWFISH);

$length = 20;
$token = random_bytes($length);

echo $token;

echo "<br>";

$given = "password";

echo "<br>";

if (password_verify($given, $hash)){
	echo "true";
} else {
	echo "false";
}
echo "<br>";

echo "Hash length is: " . strlen($hash);



echo "<br>";

print_r($_COOKIE);


 ?>