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

    <div class="banner"
        style="background-color: <?php echo get_theme_mod('banner-background_color', '#FFFFFF'); ?>;height:200px">
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

?>

<!-- generic is used to create any type of input field -->

<label for="">Input generic</label> <br>
<input type="password" style="background-color:white;color:black;" data-foo="bar"
    value=<?php echo esc_html( $generic ) ?> /> <br>
<!-- date -->

<?php
$date = get_theme_mod( 'date_setting' );
?>

<label for="">Date</label> <br>
<input type="date" value=<?php echo esc_html( $date ) ?>>
<br>
<?php
	// slider
$slider = get_theme_mod( 'slider_setting' );
echo 'Slider value: ';
echo esc_html($slider);
?>
<br>
<!-- sortable -->

<?php

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

<!-- dimentions for padding and margin -->

<?php
$dimensions = get_theme_mod('setting_dimensions_2', []);

// Define default dimensions
$default_dimensions = [
    'padding-top'    => '1em',
    'padding-bottom' => '10rem',
    'padding-left'   => '1vh',
    'padding-right'  => '10px',
    'margin-top'     => '1em',
    'margin-bottom'  => '10rem',
    'margin-left'    => '1vh',
    'margin-right'   => '10px',
];

$dimensions = wp_parse_args($dimensions, $default_dimensions);
?>

<div class="my-element" style="
	background-color:lightblue;
    padding-top: <?php echo esc_attr($dimensions['padding-top']); ?>;
    padding-bottom: <?php echo esc_attr($dimensions['padding-bottom']); ?>;
    padding-left: <?php echo esc_attr($dimensions['padding-left']); ?>;
    padding-right: <?php echo esc_attr($dimensions['padding-right']); ?>;
    margin-top: <?php echo esc_attr($dimensions['margin-top']); ?>;
    margin-bottom: <?php echo esc_attr($dimensions['margin-bottom']); ?>;
    margin-left: <?php echo esc_attr($dimensions['margin-left']); ?>;
    margin-right: <?php echo esc_attr($dimensions['margin-right']); ?>;
">
    Padding, margin will apply here
</div>


<!-- multicolor -->

<?php
$defaults = array(
	'link'   => '#0088cc',
	'hover'  => '#00aaff',
	'active' => '#00ffff',
);

$value = get_theme_mod( 'multicolor_setting', $defaults );

?>

<div class="">
    <a href="#" style="color: <?php echo esc_attr(get_theme_mod('multicolor_setting', '#0088cc')['link']); ?>">Link</a>
    <a href="#"
        style="color: <?php echo esc_attr(get_theme_mod('multicolor_setting', '#00aaff')['hover']); ?>">Hover</a>
    <a href="#"
        style="color: <?php echo esc_attr(get_theme_mod('multicolor_setting', '#00ffff')['active']); ?>">Active</a>
</div>

<div class="my-editor">
    <?php
    // Output the editor content
    $editor_content = get_theme_mod('editor_setting', '');
    // wp_editor($editor_content, 'editor_setting');
	
    ?>
    <div><?php echo $editor_content?></div>
</div>


<!-- repeater -->

<?php

$repeater_items = get_theme_mod('repeater_setting', []);

if (!empty($repeater_items)) {
    echo '<ul class="custom-repeater-links">';
    foreach ($repeater_items as $item) {
       
        $link_text = isset($item['link_text']) ? esc_html($item['link_text']) : '';
        $link_url = isset($item['link_url']) ? esc_url($item['link_url']) : '';
        $link_target = isset($item['link_target']) ? esc_attr($item['link_target']) : '_self';
        $checkbox_value = isset($item['checkbox']) ? (bool) $item['checkbox'] : false;

       
        echo '<li>';
        echo '<a href="' . $link_url . '" target="' . $link_target . '">' . $link_text . '</a>';
       
        if ($checkbox_value) {
            echo ' <span>(Important)</span>';
        }
        echo '</li>';
    }
    echo '</ul>';
} else {
    echo '<p>No items found. Please configure them in the customizer.</p>';
}
?>

<?php
// get_sidebar();
// get_footer();