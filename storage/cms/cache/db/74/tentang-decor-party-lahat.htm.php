<?php 
use Raviraj\Rjgallery\Models\Category;use  RainLab\Blog\Models\Category as Blog;class Cms5eac2d8d6e6a8392376714_8ae785899ec53eeb3e8cc22ceeaf4e19Class extends Cms\Classes\PageCode
{


public function onStart(){
    $this['cats'] = Category::where('slug','team')->get();
    $this['tentang'] = Blog::where('slug','tentang')->orderBy('id','desc')->first();
}
}
