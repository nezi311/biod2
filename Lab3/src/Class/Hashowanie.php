<?php
namespace Hashowanie;


function mysql_aes_decrypt($val,$ky)
{
    $key="\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0";
    for($a=0;$a<strlen($ky);$a++)
      $key[$a%16]=chr(ord($key[$a%16]) ^ ord($ky[$a]));
    $mode = MCRYPT_MODE_ECB;
    $enc = MCRYPT_RIJNDAEL_128;
    $dec = @mcrypt_decrypt($enc, $key, $val, $mode, @mcrypt_create_iv( @mcrypt_get_iv_size($enc, $mode), MCRYPT_DEV_URANDOM ) );
    return rtrim($dec,(( ord(substr($dec,strlen($dec)-1,1))>=0 and ord(substr($dec, strlen($dec)-1,1))<=16)? chr(ord( substr($dec,strlen($dec)-1,1))):null));
}

function mysql_aes_encrypt($val,$ky)
{
    $key="\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0\0";
    for($a=0;$a<strlen($ky);$a++)
      $key[$a%16]=chr(ord($key[$a%16]) ^ ord($ky[$a]));
    $mode=MCRYPT_MODE_ECB;
    $enc=MCRYPT_RIJNDAEL_128;
    $val=str_pad($val, (16*(floor(strlen($val) / 16)+(strlen($val) % 16==0?2:1))), chr(16-(strlen($val) % 16)));
    return mcrypt_encrypt($enc, $key, $val, $mode, mcrypt_create_iv( mcrypt_get_iv_size($enc, $mode), MCRYPT_DEV_URANDOM));
}
?>
