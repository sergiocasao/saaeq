<?php
/**
 * verifica que si la  futa contiene el string buscado
 * @param  string  $page_slug slug de la pagina a pasar
 * @return boolean            si se encuentra en la fruta o no
 */
function is_page($route_name)
{
    return Route::currentRouteName() == $route_name;
}


/**
 * encrypta el mail
 * @param  string $mail        mail encriptasrse
 * @return string              valor encriptado
 */
function cltvoMailEncode($mail)
{
    $key = env("CLTVO_ENCRYPTION_KEY=") ? env("CLTVO_ENCRYPTION_KEY=") : '#&$sdfx2s7sffgg4';
    return base64url_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $mail, MCRYPT_MODE_CBC, md5(md5($key))));
}


/**
 * desencrypta el mail encryptado con la la funcion cltvoMailEnconde
 * @param  string $encodedMail mail encryptado con la la funcion cltvoMailEnconde
 * @return string              valor desencriptado
 */
function cltvoMailDecode($encodedMail)
{
    $key = env("CLTVO_ENCRYPTION_KEY=") ? env("CLTVO_ENCRYPTION_KEY=") : '#&$sdfx2s7sffgg4';
    return rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5($key), base64url_decode($encodedMail), MCRYPT_MODE_CBC, md5(md5($key))), "\0");
}

function base64url_encode($data) {
  return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
}

function base64url_decode($data) {
  return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT));
}


/**
 * coleccion con la que vamos a traer elemntos aleatorios
 * @param  IlluminateDatabaseEloquentCollection $Colection coleccion de elenntos
 * @return IlluminateDatabaseEloquentCollection coleccion de elemntos aleatorios
 */
function getRandomElements(Illuminate\Database\Eloquent\Collection $Colection)
{

    $ColectionRandom = new Illuminate\Database\Eloquent\Collection ;

    $ColectionRandNumber = rand( 0, $Colection->count() ) ;

    if ( $ColectionRandNumber > 0 ) {

        $ColectionRandom = $Colection->random( $ColectionRandNumber ) ;

        if ( get_class($ColectionRandom) != "Illuminate\Database\Eloquent\Collection" ) {
            $ColectionRandom = (new Illuminate\Database\Eloquent\Collection)->add($ColectionRandom) ;
        }

    }

    return  $ColectionRandom;
}
