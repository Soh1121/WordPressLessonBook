<div id="comments">
<?php if(have_comments()): ?>
<h3>コメント</h3>

<ul>
<?php wp_list_comments();?>
</ul>
<?php endif; ?>

<?php comment_form('format=html5'); ?>
</div>