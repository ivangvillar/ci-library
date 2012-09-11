<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/*

by Omar 
*/

class media
{

	function __construct()
	{

		$this->obj =& get_instance();
        log_message('debug','Media Kütüphanesi '.get_class($this->obj).' sınıfı ile başlatıldı');

	}

		/**
		* @package DailyMation Video parser 
		* @param $id > youtube id
		* @param $return >  default embed , thumb ,hqtgumb
		* @param $width > default 560
		* @param $height  > default 349
		* @param $rel > default cigenerate
		*/
	function dailyVideo($id,$return='embed',$width='',$height='')
	{

		$site = file_get_contents("http://www.dailymotion.com/services/oembed?format=json&url=http://www.dailymotion.com/video/$id");

		$convert = json_decode($site);
		$thumbs = $convert->thumbnail_url;


		if($return == 'embed'){
		return '<iframe src="http://www.dailymotion.com/embed/video/'.$id.'" width="'.($width?$width:560).'" height="'.($height?$height:349).'" frameborder="0"></iframe>';
	    }
	    //return normal thumb
	    else if($return == 'thumb'){
	        return $thumbs;
	    }
	    // else return id
	    else{
	        return $id;
	    }
	}



		/**
		* @package Youtube Video parser 
		* @param $id > youtube id
		* @param $return >  default embed , thumb ,hqtgumb
		* @param $width > default 560
		* @param $height  > default 349
		* @param $rel > default cigenerate
		*/
		function youtubeVideo($id,$return='embed',$width='',$height='',$rel="cigenerate")
		{
		    //return embed iframe
		    if($return == 'embed'){
				$r = "<iframe src='http://www.youtube.com/embed/$id?rel=$rel' frameborder='0' width='".($width?$width:560)."' height='".($height?$height:349)."'></iframe>";
				return $r;
		    }
		    //return normal thumb
		    else if($return == 'thumb'){
		        return 'http://i1.ytimg.com/vi/'.$id.'/default.jpg';
		    }
		    //return hqthumb
		    else if($return == 'hqthumb'){
		        return 'http://i1.ytimg.com/vi/'.$id.'/hqdefault.jpg';
		    }
		    // else return id
		    else{
		        return $id;
		    }
		}


		/**
		* @package Youtube Video parser 
		* @param $id > youtube id
		* @param $return >  default embed , thumb ,hqtgumb
		* @param $width > default 560
		* @param $height  > default 349
		*/
		function vimeoVideo($id,$return='embed',$width='',$height='')
		{

			$site 	 	= file_get_contents("http://vimeo.com/api/v2/video/$id.json");
			$convert 	= json_decode($site);
			$thumbs 	= $convert[0]->thumbnail_large;

			if($return == 'embed')
			{
				$e = '<iframe src="http://player.vimeo.com/video/'.$id.'" width="'.($width?$width:560).'" height="'.($height?$height:349).'" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';
				return $e;
		    }
		    //return normal thumb
		    else if($return == 'thumb')
		    {
		        return $thumbs;
		    }
		    // else return id
		    else
		    {
		        return $url;
		    }
		}


}