<?php

/*

type: layout
content_type: static
name: Clean
position: 2
is_default: true
description: Clean layout

*/


?>
<?php include template_dir(). "header.php"; ?>

<section id="content">
<?php include template_dir(). "top_bar_on_pages.php"; ?>

  <div class="container edit"  field="content" rel="content">
    <p class="element">Type your text here</p>
  </div>
</section>
<?php include template_dir(). "footer.php"; ?>
