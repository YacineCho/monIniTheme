<?php
get_header();
?>
<div class="category">
    <h1>Champ de recherche : <?php print(get_search_query()); ?></h1>
    <?php get_template_part('loop'); ?>

</div>
<?php
get_sidebar();
get_footer();
?>


