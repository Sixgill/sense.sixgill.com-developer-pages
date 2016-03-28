<?php
/* Template Name: About */
	get_template_part( 'mailsend' );
    get_header(); 
?>

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<?php
				// Preparing variables
				$about_header = get_field('about_header');
				
				$top_text_left = get_field('top_text_left');
				$top_text_right = get_field('top_text_right');

				$team_header = get_field('team_header');
				$team = get_field('team');
				
				$board_header = get_field('board_header');
				$board = get_field('board');
			?>

<section class="tech_col">
    <div class="container">
        <h2><?php echo $about_header; ?></h2>
        <div class="experts_col_left">
            <?php echo $top_text_left; ?>
        </div>
        <div class="experts_col_right">
            <?php echo $top_text_right; ?>
        </div>
    </div>
</section>

<section class="team_col">
    <div class="container">
        <h6><span><?php echo $team_header; ?></span></h6>
        
		<?php if($team) : ?>        
 			<div id="team-three">
				<div class="container">
					<div class="row">
					<?php $i = 0; foreach($team as $item) : $i++; ?>
						<div class="col-md-4">
                        	<div class="slideimg"><img src="<?php echo $item['photo']; ?>"></div>
                        	<h3><?php echo $item['name']; ?></h3>
                       		<h4><?php echo $item['title']; ?></h4>
                        	<div class="team_slidein">
                            	<p><strong><?php echo $item['bold_bio']; ?></strong></p>
								<p><?php echo $item['regular_bio']; ?></p>
                        	</div>
                   		</div> 
						<?php if($i % 3 == 0) : ?>
							<div class="clearfix"></div>
                            <div style="padding-top:15px;">&nbsp;</div>
						<?php endif; ?>
					<?php endforeach; ?>
					</div>
				</div>
			</div>
                
 			<div id="team-two">
				<div class="container">
					<div class="row">
					<?php $i = 0; foreach($team as $item) : $i++; ?>
						<div class="col-sm-6">
                        	<div class="slideimg"><img src="<?php echo $item['photo']; ?>"></div>
                        	<h3><?php echo $item['name']; ?></h3>
                       		<h4><?php echo $item['title']; ?></h4>
                        	<div class="team_slidein">
                            	<p><strong><?php echo $item['bold_bio']; ?></strong></p>
								<p><?php echo $item['regular_bio']; ?></p>
                        	</div>
                   		</div> 
						<?php if($i % 2 == 0) : ?>
							<div class="clearfix"></div>
                            <div style="padding-top:15px;">&nbsp;</div>
						<?php endif; ?>
					<?php endforeach; ?>
					</div>
				</div>
			</div>
                
 			<div id="team-one">
				<div class="container">
					<div class="row">
					<?php $i = 0; foreach($team as $item) : $i++; ?>
						<div class="col-xs-12">
                        	<div class="slideimg"><img src="<?php echo $item['photo']; ?>"></div>
                        	<h3><?php echo $item['name']; ?></h3>
                       		<h4><?php echo $item['title']; ?></h4>
                        	<div class="team_slidein">
                            	<p><strong><?php echo $item['bold_bio']; ?></strong></p>
								<p><?php echo $item['regular_bio']; ?></p>
                                <?php if($i < 6) : ?>
								<hr/>
								<?php endif; ?> 
                                 <?php if($i == 6) : ?>
								<div style="padding-bottom:15px;">&nbsp;</div>
								<?php endif; ?>
                        	</div>
                   		</div> 
					<?php endforeach; ?>
					</div>
				</div>
			</div>
		<?php endif; ?>
        
	</div>
</section>

<section class="team_col">
    <div class="container">
        <h6><span><?php echo $board_header; ?></span></h6>
        <div class="sixgill_board">
            
            	<?php if($board) : ?>
					<div class="row">
					<?php $i = 0; foreach($board as $item) : $i++; ?>
						<div class="col-xm-12 col-sm-12 col-md-4">
                        	<h3><?php echo $item['name']; ?></h3>
                       		<h4><?php echo $item['title']; ?></h4>
                        	<div class="team_slidein2">
								<p><?php echo $item['bio']; ?></p>
                        	</div>
                   		</div> 
						<?php if($i % 3 == 0) : ?>
							<div class="clearfix"></div>
                            <div style="padding-top:15px;">&nbsp;</div>
						<?php endif; ?>
					<?php endforeach; ?>
					</div>
				<?php endif; ?>   
        </div>

    </div>
</section>

      <?php endwhile; ?>
      <?php endif; // have post?>

<?php
    get_footer();
?>