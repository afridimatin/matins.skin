ghbfv<?php
/**
 * Template Name: Routine
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>
<?php 
$gender="";
?>
<div class="routine">
  <h4>Welcome to Routine Builder</h4>
  <h6>Please fillout the form below and we'll generate a routine according to your concerns or needs.</h6>
  <form id="form1">
    <h4>Select your gender</h4>
    <div class="container-form">
      <input type="radio" name="gender" checked="checked"
      <?php if (isset($gender) && $gender=="female") echo "checked";?>
      value="female"><div class="checkmark">Female</div>
      <br>
    </div>

    <div class="container-form">
      <input type="radio" name="gender"
      <?php if (isset($gender) && $gender=="male") echo "checked" ;?>
      value="male"><div class="checkmark">Male</div>
      <br>
      
    </div>
    
    
    <input type="button" name="next" class="button-green action-button" value="Next" id="next1"/>
  </form>

  <form id="form2">
    <h4>What is your age group?</h4>
    <div class="container-form">
      <input type="radio" name="age" checked="checked"
      <?php if (isset($age) && $age=="18") echo "checked";?>
      value="18"><div class="checkmark">18 or under</div>
      <br>
    </div>

    <div class="container-form">
      <input type="radio" name="age"
      <?php if (isset($age) && $age=="29") echo "checked";?>
      value="29"><div class="checkmark">19 to 35</div>
      <br>
    </div>

    <div class="container-form">
      <input type="radio" name="age"
      <?php if (isset($age) && $age=="55") echo "checked";?>
      value="55"><div class="checkmark">36 to 55</div>
      <br>
    </div>

    <div class="container-form">
      <input type="radio" name="age"
      <?php if (isset($age) && $age=="65") echo "checked";?>
      value="65"><div class="checkmark">55 or over</div>
      <br>
    </div>
    
    <input type="button" name="previous" class="button-green action-button" value="Previous" id="prev1"/>
    <input type="button" name="next" class="button-green action-button" value="Next" id="next2"/>
  </form>


  <form id="form4">
    <div class="container-form">
      <input type="radio" name="option"
      <?php if (isset($option) && $option=="concerns") echo "checked";?>
      value="concerns" id="concerns"><div class="checkmark" >I know my concern(s)</div>
      <br>
    </div>
    
    <div class="container-form">
      <input type="radio" name="option"
      <?php if (isset($option) && $option=="needs") echo "checked";?>
      value="needs" id="needs"><div class="checkmark" >I have needs</div>
      <br>
    </div>

    <input type="button" name="previous" class="button-green action-button" value="Previous" id="prev2"/>
  </form>


  <form id="formConcerns" method="POST">
    <h4>Skin Concerns</h4>
    <div class="container-form">
      <input type="checkbox" name= 'tag[]' value="dryness"><div class="checkmark">Dryness</div>
      <br>
    </div>

    <div class="container-form">
      <input type="checkbox" name= 'tag[]'  value="dullness"><div class="checkmark">Dullness</div>
      <br>
    </div>

    <div class="container-form">
      <input type="checkbox" name= 'tag[]'  value="pores"><div class="checkmark">Pores</div>
      <br>
    </div>
    
    <div class="container-form">
      <input type="checkbox" name= 'tag[]'  value="pores"><div class="checkmark">Pores</div>
      <br>
    </div>

    <div class="container-form">
      <input type="checkbox" name= 'tag[]'  value="pores"><div class="checkmark">Pores</div>
      <br>
    </div>

    <div class="container-form">
      <input type="checkbox" name= 'tag[]'  value="pores"><div class="checkmark">Pores</div>
      <br>
    </div>

    
      
    <input type="button" name="previous" class="button-green action-button" value="Previous" id="prev2" />
    <input type="submit" class="button-green" value="Submit" id="submitAction"/>
  </form>


  <form id="formNeeds" method="POST">
    <h4>Needs</h4>
    <div class="container-form">
      <input type="radio" name= 'tag[]' value="dryness"><div class="checkmark">I want a spotless skin</div>
      <br>
    </div>

    <div class="container-form">
      <input type="radio" name= 'tag[]'  value="dullness"><div class="checkmark">I want a bright & glowing skin</div>
      <br>
    </div>

    <div class="container-form">
      <input type="radio" name= 'tag[]'  value="pores"><div class="checkmark">I want a hydrated skin</div>
      <br>
    </div>
    
    <div class="container-form">
      <input type="radio" name= 'tag[]'  value="pores"><div class="checkmark">I want a younger skin</div>
      <br>
    </div>

    <div class="container-form">
      <input type="radio" name= 'tag[]'  value="pores"><div class="checkmark">I want </div>
      <br>
    </div>

    <div class="container-form">
      <input type="radio" name= 'tag[]'  value="pores"><div class="checkmark">Pores</div>
      <br>
    </div>
    

    <input type="button" name="previous" class="button-green action-button" value="Previous" id="prev2" />
    <input type="submit" value="Submit" class="button-green action-button" id="submitAction"/>
  </form>


</div>


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

<div id="routineBuild">
<?php
  
  $name="";
  if(isset($_POST['tag'])){
  $tags = $_POST['tag'];
  $id = "";
  $args = array(
    'tag' => $tags
    );
  $products = wc_get_products( $args );

  echo "Dear, according to your skin, we found that these products would be best for your skin. Please check usage timing in the product page." ;
  
  foreach ($products as $product):
    $id = $product->get_id();
    $name = $product->get_name();
   echo do_shortcode("[product id=\"$id\"]");
  endforeach;
}
    echo '<script type="text/JavaScript"> 
    
      var routine = document.getElementById("routineBuild");
      routine.scrollIntoView({behavior:"smooth", block:"start"});
     </script>'
  
  ?>

</div>


<?php
get_footer();
