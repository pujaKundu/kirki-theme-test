<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package kirki
 */

get_header();

?>

	<main id="primary" class="site-main">

	  <div  class="banner" style="background-color: <?php echo get_theme_mod('banner-background_color', '#FFFFFF'); ?>;height:200px">
    	<h1 class="banner-heading" style="color: <?php echo get_theme_mod('banner-typography'); ?>;">
        <!-- <?php echo esc_html(get_theme_mod('my_custom_text', 'Typography will apply here!')); ?> -->

		Typography will apply here!
   	    </h1>
		   

	  </div>
	  
	  <!-- about section -->
	  <div class="about">
		about section
	  </div>
	  
	</main>
	<!-- #main -->

<!-- test -->
<!-- code editor -->

<?php echo get_theme_mod( 'code_setting', '' ); ?>

<!-- typography -->
<?php

$value = get_theme_mod( 'typography_setting', [] );

$generic = get_theme_mod('generic_custom_setting', []);

// echo '<p>' . sprintf( esc_html__( 'Typography styles will apply on this p tag' ), $value['font-family'] ) . '</p>';

// echo '<h1>' . sprintf( esc_html__( 'Typography styles will apply on this h1 tag' ), $value['font-family'] ) . '</h1>';

?>

<!-- generic is used to create any type of input field -->


<input type="password" style="background-color:white;color:red;" data-foo="bar" />

<!-- date -->

<?php

$date = get_theme_mod( 'date_setting' );

// echo esc_html( $date );

// echo '<p>' . sprintf( esc_html__( 'Slider value' ), $slider ) . '</p>';

?>

<label for="">Date</label>
<input type="date" value=<?php echo esc_html( $date ) ?>>

<?php
	// slider
$slider = get_theme_mod( 'slider_setting' );
echo 'Slider value ';
echo esc_html($slider);
?>

<!-- sortable -->

<?php
// Assuming your theme's slug is 'kirki', replace it with your actual theme slug.
$sorted_options = get_theme_mod('sortable_setting', [ 'option3', 'option1', 'option4' ]);

$options_content = [
    'option1' => '<div>Content for Option 1</div>',
    'option2' => '<div>Content for Option 2</div>',
    'option3' => '<div>Content for Option 3</div>',
    'option4' => '<div>Content for Option 4</div>',
    'option5' => '<div>Content for Option 5</div>',
    'option6' => '<div>Content for Option 6</div>',
];


foreach ($sorted_options as $option) {
    if (isset($options_content[$option])) {
        echo $options_content[$option];
    }
}
?>

<?php
// get_sidebar();
// get_footer();
