<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * Helper function to check whether the url_slug / alias already exists
 */
if(!function_exists('isUrlExists')){
    function isUrlExists($tblName, $urlSlug){
        if(!empty($tblName) && !empty($urlSlug)){
            $ci = & get_instance();
            $ci->db->from($tblName);
            $ci->db->where('alias',$urlSlug);
            $rowNum = $ci->db->count_all_results();
            return ($rowNum>0)?true:false;
        }else{
            return true;
        }
    }
}
/*
Helper untuk memotong kata full text menjadi n karakter
*/
if (!function_exists ('cutText'))
{
    function cutText($text, $length, $mode = 3)
    {
        /*
        Memotong kata/teks/kalimat apa adanya
        Mode 1 : echo cutText($text, 50, 1) . '...'; 
        Contoh script untuk memotong 50 hur...
        */
        if ($mode != 1)
        {
            $char = $text{$length - 1};
            switch($mode)
            {
                /*
                Memotong teks, kalimat atau paragraf tanpa memotong kata 
                (dengan menghilangkan kata yang terpotong)
                Mode 2 : echo cutText($text, 50, 2) . '...'; 
                Contoh script untuk memotong 50...
                */
                case 2: 
                    while($char != ' ') {
                        $char = $text{--$length};
                    }
                /*
                Mode 3 : echo cutText($text, 50, 3) . '...'; 
                Memotong teks, kalimat atau paragraf tanpa memotong kata 
                (dengan menambahkan kata yang terpotong)
                Contoh script untuk memotong 50 huruf
                */
                case 3:
                    while($char != ' ') {
                        $char = $text{++$length};
                    }
            }
        }
        return substr($text, 0, $length);
    }
}