<html>
<head>
    <title>my theme</title>
    <meta charset="utf-8">
    <?php wp_head();?>
</head>
<body>
<h1>
    our posts
</h1>
<?php while (have_posts()):the_post();?>

    <h2> <?= the_title() ?></h2>
    <p> <?= the_content() ?></p>
<?php endwhile;?>
<?php wp_footer();?>
</body>
</html>