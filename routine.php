             
<?php
require __DIR__ . '/vendor/autoload.php';

use Automattic\WooCommerce\Client;

$woocommerce = new Client(
    'http://localhost/matins.skin',
    'ck_98507aa711ec4beca2712044851d3f0d65804aa0',
    'cs_1f0199d46bdf21c7fe60ccb653d4558e324d692f',
    [
        'wp_api' => true,
        'version' => 'wc/v3',
		'query_string_auth' => true
        
    ]
);
?>

<?php

$gender = "";
?>

<form method="post" action="welcome.php"> 

<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="female") echo "checked";?>
value="female">Female
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="male") echo "checked";?>
value="male">Male
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="other") echo "checked";?>
value="other">Other




<input type="submit" name="submit" value="Submit">


</form>
<?php
echo "<h2>Your Input:</h2>";
echo $gender;
?>

<?php echo json_encode($woocommerce->get('products')); ?>
