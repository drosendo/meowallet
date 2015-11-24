<?php

class MEOWallet_Verify {

    public static function verifyData($params) {


        $result = MEOWallet_Request::verify(
                        MEOWallet_Config::getEnvURl() . '/callback/verify/', MEOWallet_Config::$apikey, $params);

        return $result;
    }

}
