<?php
/**
 * Created by PhpStorm.
 * User: Angel Gonzalez
 * Date: 09/25/2019
 * Time: 00:40
 */

namespace ProjectSaturn\Definitions\Dictionary;

use Illuminate\Support\Fluent;

class Nfc extends Fluent
{
    public function __construct($message, $encryptionPublicKey = '')
    {
        $this->attributes['message'] = $message;
        if (!empty($encryptionPublicKey)) {
            $this->attributes['encryptionPublicKey'] = $encryptionPublicKey;
        }

        return $this;
    }

    public function setMessage($message)
    {
        $this->attributes['message'] = $message;

        return $this;
    }

    public function setEncryptionPublicKey($encryptionPublicKey)
    {
        $this->attributes['encryptionPublicKey'] = $encryptionPublicKey;

        return $this;
    }
}
