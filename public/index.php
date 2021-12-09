<?php

use App\Kernel;

require_once dirname(__DIR__) . '/vendor/autoload_runtime.php';

return function (array $context) {
    return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
};
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kursy NBP</title>
</head>

<body>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus fugiat odit eos error earum delectus dicta corrupti iure, praesentium architecto quasi minima, aliquam est ratione eaque? Natus vel cumque cupiditate tenetur ut possimus, aut blanditiis quos nemo, totam quia laborum nulla repellat odio molestias doloribus dolore. Commodi, perferendis sit aut dolor enim doloremque sint accusantium aperiam optio architecto unde quibusdam placeat a! Nostrum, nam maiores numquam ex magnam neque adipisci iusto sit et distinctio. Odio facilis hic consequatur accusantium et sed, quis doloremque tenetur nobis voluptas? Rerum, iure beatae saepe omnis obcaecati recusandae at temporibus dolor totam deserunt molestiae nam vitae doloremque culpa earum laudantium. Voluptas eaque ex itaque, a vitae quos mollitia, adipisci harum, reiciendis sunt illum alias temporibus!
</body>

</html>