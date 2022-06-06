<?php

class Hash{
    public static function make(string $plainText): string{
              return password_hash($plainText,PASSWORD_BCRYPT,['cost'=>10]);
    }

    public static function verify(string $plainText, string $hashedPassword){
               return password_verify($plainText, $hashedPassword);
    }
    public static function hash(int $userId){
        return hash('sha256',$userId.Util::getCurrentTimeInMillis() . strrev($userId) . rand());
    }
}


?>