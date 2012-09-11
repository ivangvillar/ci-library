ci-library
==========

codeigniter kütüphaneler

### Media Library
1.  youtube video link parser
2.  vimeo video link parser
3.  dailymotion video link parser


Usage :
> youtube :
>1. $embed = $this->media->youtubeVideo($vidid,'embed');
>2. $thumb = $this->media->youtubeVideo($vidid,'hqthumb');

> vimeo : 
2. $embed = $this->media->vimeoVideo($vidid); 
   $thumb = $this->media->vimeoVideo($vidid,'thumb');

> dailymotion : 
1. +$embed = $this->media->dailyVideo($vidid);
+$thumb = $this->media->dailyVideo($vidid,'thumb');
