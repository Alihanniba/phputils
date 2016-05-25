<?php
/**
 *
 * @authors alihanniba          alihanniba@gmail.com
 * @date    2016-03-24 12:05:51
 * @version \www.alihanniba.com\
 */


function friendlyURL($string, $replacement = '-') {
    $map = array(
        '/à|á|å|â|ä/' => 'a',
        '/è|é|ê|ẽ|ë/' => 'e',
        '/ì|í|î/' => 'i',
        '/ò|ó|ô|ø/' => 'o',
        '/ù|ú|ů|û/' => 'u',
        '/ç|č/' => 'c',
        '/ñ|ň/' => 'n',
        '/ľ/' => 'l',
        '/ý/' => 'y',
        '/ť/' => 't',
        '/ž/' => 'z',
        '/š/' => 's',
        '/æ/' => 'ae',
        '/ö/' => 'oe',
        '/ü/' => 'ue',
        '/Ä/' => 'Ae',
        '/Ü/' => 'Ue',
        '/Ö/' => 'Oe',
        '/ß/' => 'ss',
        '/ /'=>' ',
        '/　/'=>'',
        '/～|·|！|@|#|￥|%|…|&|×|（|）|-|\+|=|『|【|』|】|、|:|；|“|”|’|《|，|》|。|？|\/|—|_|‘|：|√|＜|°|丶/'=>' ',
        '/[^\w\s\x80-\xff]/' => ' ',
        '/\\s+/' => $replacement
    );

    $string = preg_replace(array_keys($map), array_values($map), $string);
    $string = preg_replace('/\\s+/',$replacement, strtolower($string));
    $string = trim($string,$replacement);
    return $string;
}

echo friendlyURL('https://www.alihanniba.com');
