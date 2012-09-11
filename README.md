ci-library
==========

codeigniter kütüphaneler

### Media Library
1.  youtube video link parser
2.  vimeo video link parser
3.  dailymotion video link parser


Usage :
> youtube :
$embed = $this->media->youtubeVideo($vidid,'embed');
$thumb = $this->media->youtubeVideo($vidid,'hqthumb');
> vimeo : 
$embed = $this->media->vimeoVideo($vidid);
$thumb = $this->media->vimeoVideo($vidid,'thumb');
> dailymotion : 
$embed = $this->media->dailyVideo($vidid);
$thumb = $this->media->dailyVideo($vidid,'thumb');
