
<?php 
	
	if (comments_open()): 
?>
	
	<hr/>

	<section id="comments">

	<?php 
		
		if (have_comments()): 
	?>

		<h2>Comments</h2>
		<ul>
			<?php
				wp_list_comments('reverse_top_level=false');
			?>
		</ul>

	<?php else: ?>

		<h3>
			There are currently no comments on this post. Be the first
			to start the discussion!
		</h3>

	<?php endif; ?>

	<?php comment_form(
		array(
			'comment_notes_after' => '',
			'comment_notes_before' => '',
			'must_log_in' => '<p>Please log in</p>'
		)
	); ?>

	</section>

<?php endif; ?>
