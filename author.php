<?php
get_header();
?>
<?php $category = get_queried_object(); 
echo '<pre>';
var_dump($category);
echo '</pre>';
?>
<main class="page section container">
    <h2 class="text-center primary-text">Category: <?php echo $category->name;?></h2>
</ul>
</main>
<?php
get_footer();