<?php
/*
Test file

Tested for links:

http://localhost/index.php
http://localhost/
http://localhost/index.php/
http://localhost/url/index.php    
http://localhost/url/index.php/  
http://localhost/url/ab
http://localhost/url/ab/c
*/
/* importamos nuestro trai URL Para poder obtener le serve name  */
include_once ('../Html/Config.php');
include_once ('../index.php');
class Home
{
    use URL;
}

$h = new Home();

?>

<a href="<?=$h->get['base_url'].'../index.php'?>"></a> 