<?php 
use Raviraj\Rjgallery\Models\Gallery;use Raviraj\Rjgallery\Models\Category;class Cms5eac1dc038548925698385_d714b5e4a6430c531867080ddb188ebbClass extends Cms\Classes\PageCode
{


public function onStart(){
 $this['cats'] = Category::all();
  $this['gals'] = Gallery::all();
}
}
