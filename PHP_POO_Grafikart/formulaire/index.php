<?php
    use \Tutoriel\Autoloader;
    use \Tutoriel\HTML\Form;
    use \Tutoriel\HTML\BootstrapForm;
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    </head>

    <body>
        <?php
            /*
                Autoloader::autoload

            
                function mon_autoloader($class_name)
                {
                    require 'classes/'.$class_name.'.php';
                }
            */
            require 'classes/Autoloader.php';
            Autoloader::register();

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

            $form2 = new BootstrapForm($_POST);
        ?>

        <form action="#" method="post">
            <?php
                echo $form2->input('username');
                echo $form2->input('password');
                echo $form2->submit();
            ?>
        </form>
    </body>
</html>