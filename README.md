ci-library
==========

codeigniter my library

### Media Library
1.  youtube video link parser
2.  vimeo video link parser
3.  dailymotion video link parser


Usage :

1. youtube :

> $embed = $this->media->youtubeVideo($vidid,'embed');

> $thumb = $this->media->youtubeVideo($vidid,'hqthumb');

2. vimeo : 

> $embed = $this->media->vimeoVideo($vidid); 

> $thumb = $this->media->vimeoVideo($vidid,'thumb');

3. dailymotion : 

> $embed = $this->media->dailyVideo($vidid);

> $thumb = $this->media->dailyVideo($vidid,'thumb');
