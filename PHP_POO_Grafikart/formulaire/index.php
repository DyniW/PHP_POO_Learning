<?php
    require 'form.php';
    require 'text.php';

    $form1 = new Form(array('username' => 'Roger'));

    var_dump(Text::publicWithZero(4));//donne 04

    /*
        echo '<pre>';
        	var_dump($form);
        echo '<pre>';
    */

    echo $form1->input('username');
    echo $form1->input('password');
    echo $form1->submit();

    $form2 = new Form($_POST);
?>

<form action="#" method="post">
    <?php
        echo $form2->input('username');
        echo $form2->input('password');
        echo $form2->submit();
    ?>
</form>