<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package TestWordpress
 */
get_header(); 
//include_once('stars.php');
?>

<style scoped>
    div#content{
    position: relative;
    /* height: 700px; */
}

@media screen and (max-width: 47em){
    div#content{
   /* height: 750px; */
  }
}
</style>
<div class="container" class="jumbotron" id="reviewsPara">
        <h6>Please leave a review about your experience with Lucy</h6>
        <button id="getButton" class="button btn btn-primary"> Get reviews </button> 
</div>
<div id="resultSection"></div>

<?php  //	while ( have_posts() ) : the_post();



if(isset($_POST['cpt_nonce_field']) && wp_verify_nonce($_POST['cpt_nonce_field'],'cpt_nonce_action')):
   // $page = $_SERVER['PHP_SELF'];
  //     header("Refresh:3; url=" . $page);
  // if(isset($_POST['addButton'])):
  //if(trim($POST['postID']) == ""){
 // if (isset($_POST['postID']) == false){
 
?>
<!-- <p class="container" style="background: white; text-align: center; color: red;" /> You have not rated. Please rate </p> -->
<?php //unset($_POST['cpt_nonce_field']);  ?>

<!-- <meta http-equiv='refresh' content='3'>  -->

<?php
 // } else {
    $name = htmlspecialchars($_POST['title']);
    $content = wp_kses_post($_POST['content']);  //curata tot ce a fost pus in textbox deci $_POST['content'] de html tags
    
  /* $id = wp_insert_post(array(
       'post_title' => $name,
       'post_content' => $content,
       //'post_status' => 'publish',
       'post_status' => 'draft',
       'post_type' => 'review'
    )); */
    
    
  $id = wp_insert_post(array(
       'post_title' => $name,
       'post_content' => $content,
       'post_status' => 'publish',
       //'post_status' => 'draft',
       'post_type' => 'review'
       ));
       
   //echo  $_POST['postId'];
  update_post_meta($id, 'stars_input', $_POST['postId']);
//}
    $message = $id ?  "<h3 class=\"h3-review\"> Your review has been submitted </h3>" : "";
    echo $message;
    unset($id);
   else:
?>

<div class="container reviews-container">
     <form id="reviewMain" name="reviewMain" method="POST"  action="<?php echo get_the_permalink(); ?>">
     <!-- <form id="reviewsMain" method="POST" action="stars.php">  -->
       <h3> Add a review </h3>
       
       <span> Rate your epxerience with Lucy &nbsp; </span> 
       <p><i class="fa fa-star" id="star-1"> </i> <i class="fa fa-star" id="star-2"> </i><i class="fa fa-star" id="star-3"> </i> <i class="fa fa-star" id="star-4"> </i> <i class="fa fa-star" id="star-5"> </i></p>
    
       <input type="text" name="title" placeholder="Your Name" />
       <br/>
       <br/>
       <textarea name="content" placeholder="Content" cols="7" rows="7">  </textarea>
       <br/>
       <br/>
       <input type="hidden" name="postId" id="postId" value="" />
       <button type="submit" id="addButton" name="addButton" class="button btn btn-primary"> Create review </button>
       <?php wp_nonce_field( 'cpt_nonce_action', 'cpt_nonce_field' ); ?>
    </form>
</div>

<?php 
endif;

//endwhile;
?>
<!-- <div class="page-sidebar">
	<div id="div-search"> You can search through the site here </div>
<?php
//get_sidebar(); 
?>
	</div> -->
<div>
	<?php
  get_footer();
  $review = true;
	include_once('modal-popup.php');
	?>
</div>