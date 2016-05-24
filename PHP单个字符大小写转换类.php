<?php
/**
 *
 * @authors alihanniba          alihanniba@gmail.com
 * @date    2016-03-24 13:31:43
 * @version \www.alihanniba.com\
 */

class Base_Var_Char
{
    public function isUpper($char)
    {
        $ascll = ord($char);
        if($ascll > 64 && $ascll < 91){
            return ture;
        }
        return false;
    }

    public function isLower($char)
    {
        $ascll = ord($char);
        if($ascll > 96 && $ascll < 123){
            return true;
        }
        return false;
    }

    public function toUpper($char)
    {
        if(self::isUpper($char)){
            return $char;
        }
        $ascll = ord($char);
        return chr($ascll - 32);
    }

    public function toLower($char)
    {
        if(self::isLower($char)){
            return $char;
        }
        $ascll = ord($char);
        return chr($ascll + 32);
    }
}

$base = new Base_Var_Char;
echo $base->toUpper('a');
