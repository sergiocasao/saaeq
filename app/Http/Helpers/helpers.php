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
    return base64url_encode( $mail );
}

function encrypt_decrypt($action, $string) {
    $output = false;

    $encrypt_method = "AES-256-CBC";
    $secret_key = env("CLTVO_ENCRYPTION_KEY=") ? env("CLTVO_ENCRYPTION_KEY=") : '#&$sdfx2s7sffgg4';
    $secret_iv = env("CLTVO_ENCRYPTION_KEY=") ? env("CLTVO_ENCRYPTION_KEY=") : '#&$sdfx2s7sffgg4';

    // hash
    $key = hash('sha256', $secret_key);

    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
    $iv = substr(hash('sha256', $secret_iv), 0, 16);

    if( $action == 'encrypt' ) {
        $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
        $output = base64_encode($output);
    }
    else if( $action == 'decrypt' ){
        $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
    }

    return $output;
}



/**
 * desencrypta el mail encryptado con la la funcion cltvoMailEnconde
 * @param  string $encodedMail mail encryptado con la la funcion cltvoMailEnconde
 * @return string              valor desencriptado
 */
function cltvoMailDecode($encodedMail)
{
    return rtrim( base64url_decode($encodedMail) , "\0");
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
