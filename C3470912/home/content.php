<?php
            if(isset($_GET['content'])){
            	$content= $_GET['content'];
            }else{
                $content='home';
            }
            include './function/content2.php';
            ?>