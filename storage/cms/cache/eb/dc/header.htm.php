<?php 
use Raviraj\Rjgallery\Models\Category;class Cms5eac1b8139938433993300_a0146f770d3d2be14086e64d608eb955Class extends Cms\Classes\PartialCode
{

public function onStart(){
 $this['cats'] = Category::all();
}
}
