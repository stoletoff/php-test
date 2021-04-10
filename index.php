<?php
require_once 'vendor/autoload.php';
$faker = Faker\Factory::create();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>
    <table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
        </tr>
    </thead>
    <tbody>
        <?php for ($i=0; $i < 10; $i++) { ?>
            <tr>
                <th scope="row"><?php echo $i+1; ?></th>
                <td><?php echo $faker->name(); ?></td>
                <td><?php echo $faker->email(); ?></td>
                <td><?php echo $faker->phoneNumber; ?></td>
            </tr>
        <?php } ?>
    </tbody>
    </table>
</body>
</html>
