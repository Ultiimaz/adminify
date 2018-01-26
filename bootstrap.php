<?php
function bootstrap(){
foreach(glob('functions/*{.php}',GLOB_BRACE) as $file)
{
  include $file;

}
return $file;
}
 ?>
