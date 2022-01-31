<?php 

namespace App\Helpers;

class Helper
{
    public static function validate_value($string)
    {
        return (!empty($string))?$string:"";
    }
	public static function validate_key_value($key,$string)
    {
        return (!empty($string[$key]))?$string[$key]:"";
    }
	public static function validate_key_toggle($key,$string,$match)
    {
        return (isset($string[$key]) && $string[$key]==$match)?"checked='checked'":"";
    }
	public static function validate_key_option($key,$string,$match)
    {
        return (isset($string[$key]) && $string[$key]==$match)?"selected='selected'":"";
    }
	public static function validate_key_option_loop($key,$string,$k,$match)
    {
        return (isset($string[$key][$k]) && $string[$key][$k]==$match)?"selected='selected'":"";
    }
	
	public static function validate_key_loop_value($key,$string,$k)
    {
        return  (!empty($string[$key][$k]))?$string[$key][$k]:"";
    }
	public static function validate_key_loop_toggle($key,$string,$match,$k)
    {
        return (isset($string[$key][$k]) && $string[$key][$k]==$match)?"checked='checked'":"";
    }
	public static function validate_toggle($string,$match)
    {
        return (isset($string) && $string==$match)?"checked='checked'":"";
    }
	
	public static function key_hide_show($key,$string)
    {
        return (isset($string[$key]) && $string[$key]==0)?"hide-data":"";
    }
	
	public static function key_hide_show_v($key,$string)
    {
        return (isset($string[$key]) && $string[$key]==1)?"":"hide-data";
    }
	
	public static function key_hide_show_v2($key,$string)
    {
        return (isset($string[$key]) && $string[$key]!=1)?"":"hide-data";
    }
    
	
	public static function hide_show($string)
    {
        return (isset($string) && $string==0)?"hide-data":"";
    }
	public static function key_display($key,$string)
    {
        return (isset($string[$key]) && $string[$key]==1)?"Yes":"No";
    }

    public static function current($val)
    {
        return is_array($val) ? current($val) : $val;
    }
}