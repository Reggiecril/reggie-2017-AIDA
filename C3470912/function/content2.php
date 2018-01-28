
<?php
switch ($content) {

case 'home':
include ('./home/home.php');
break;

case 'displayItems':
include ('./product/displayItems.php');
break;

case 'queryItems':
include ('./product/queryItems.php');
break;

case 'UpdateProduct';
include './admin/UpdateProduct.php';
break;
case 'loginSubmit';
include './login/loginSubmit.php';
break;

case 'login':
include ('./login/login.php');
break;

case 'signup';
include ( './login/signup.php');
break;

case 'logout';
include ( './login/logout.php');
break;

case 'items';
include ( './product/items.php');
break;

case 'InsertForm';
include ('./admin/InsertForm.php');
break;

case 'InsertProduct';
include ('./admin/InsertProduct.php');
break;

case 'persondetail';
include ('./login/persondetail.php');
break;
case 'ManageProducts';
include ('./admin/ManageProducts.php');
break;

case 'DeleteProduct';
include ('./admin/DeleteProduct.php');
break;



case 'AmendProduct';
include ('./admin/AmendProduct.php');
break;

case 'about';
include ('./about/about.php');
break;

case 'contactForm':
include ('./contact/contactForm.php');
break;

case 'contactSubmit':
include ('./contact/contactSubmit.php');
break;

default:
echo '<p align=center>Error 404! the page you request doesn t exist or as been temporarely unaccessible</p>';
break;
}
?>