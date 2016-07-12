<?php /* Template Name: Find a camp page */ ?>

<?php get_header(); ?>

	<section class="banner">
		<div class="container-fluid">
			<?php $map_hero_title = makercamp_defaults_customizer( 'map_hero_title' );
			if ( ! empty( $map_hero_title ) ) :
				?>
				<h1>
					<?php echo $map_hero_title; ?>
				</h1>
				<?php
			endif;

			$map_hero_text = makercamp_defaults_customizer( 'map_hero_text' );
			if ( ! empty( $map_hero_text ) ) :
				?>
				<p>
					<?php echo $map_hero_text; ?>
				</p>
			<?php endif; ?>

		</div>
	</section>

	<section class="camps-map container" id="find-a-campsite">
		<?php
		$title_before_map = makercamp_defaults_customizer( 'title_before_map' );
		if ( ! empty( $title_before_map ) ): ?>
			<h1>
				<?php echo $title_before_map; ?>
			</h1>
		<?php endif;

		$map_embed_link = makercamp_defaults_customizer( 'map_embed_link' );
		if ( ! empty( $map_embed_link ) ) :
			?>
			<iframe src="<?php echo $map_embed_link; ?>"></iframe>
		<?php endif; ?>
	</section>

<?php
/**
 * Get all addresses from json file
 */
$upload_json_file = get_theme_mod( 'upload_json_file' );
$addresses        = array();
if ( ! empty( $upload_json_file ) ) :
	$addresses = json_decode( file_get_contents( $upload_json_file ), TRUE );
endif;
/**
 * Sort the JSON array by country
 */
usort( $addresses, function ( $a, $b ) {
	return strcmp( $a[ "Country" ], $b[ "Country" ] );
} );
?>

	<section class="camp-search">
		<div class="container">
			<div class="form-group camp-filters clearfix">
				<div class="form-group has-feedback">
					<input type="search" class="form-control camp-list-search" placeholder="Search affiliates" id="inputSuccess2" />
					<span class="glyphicon glyphicon-search form-control-feedback"></span>
				</div>

				<div class="btn-group camp-list-filter">
					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Country <span class="caret"></span>
					</button>
					<ul class="dropdown-menu">
						<li>
							<a href="#">Show all</a>
						</li>
						<?php
						if ( ! empty( $addresses ) && is_array( $addresses ) ) :
							$echoed_countries     = array();
							$echoed_continents    = array();
							$countries_continents = array();
							foreach ( $addresses as $key => $address ) : ?>
								<?php
								if ( in_array( $address[ 'Country' ], $echoed_countries ) ) {
									continue;
								}
								$countries_continents[ $key ][ 'Country' ]   = $echoed_countries[] = $address[ 'Country' ];
								$countries_continents[ $key ][ 'Continent' ] = $address[ 'Continent' ];
								?>

								<li>
									<a href="#"><?php echo $address[ 'Country' ]; ?></a>
								</li>
							<?php endforeach;
						endif;
						?>
					</ul>
				</div>

				<div class="btn-group camp-list-filter-continents">
					<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Continent <span class="caret"></span>
					</button>
					<ul class="dropdown-menu">
						<li>
							<a href="#">Show all</a>
						</li>
						<?php
						if ( ! empty( $addresses ) && is_array( $addresses ) ) :
							$echoed_continents = array();
							foreach ( $addresses as $address ) : ?>
								<?php
								if ( in_array( $address[ 'Continent' ], $echoed_continents ) ) {
									continue;
								}
								$echoed_continents[] = $address[ 'Continent' ];
								?>

								<li>
									<a href="#"><?php echo $address[ 'Continent' ]; ?></a>
								</li>
							<?php endforeach;
						endif;
						?>
					</ul>
				</div>
			</div>
			<div class="table-responsive">
				<table class="table table-striped map-list" data-countries-continents="<?php echo htmlentities( json_encode( $countries_continents ) ); ?>" data-addresses="<?php echo htmlentities( json_encode( $addresses ) ); ?>">
					<thead class="map-list-header">
					<tr>
						<th style="width:55px;">Country</th>
						<th style="width:50px;">State</th>
						<th style="width:80px;">Postal code</th>
						<th style="width:140px;">City</th>
						<th style="width:258px;">Organization</th>
						<th style="width:81px;">Accepting</th>
					</tr>
					</thead>
					<tbody>
					<?php
					if ( ! empty( $addresses ) && is_array( $addresses ) ) :
						foreach ( $addresses as $address ) : ?>
							<tr>
								<td><?php echo $address[ 'Country' ]; ?></td>
								<td><?php echo $address[ 'State' ]; ?></td>
								<td><?php echo $address[ 'Postal Code' ]; ?></td>
								<td><?php echo $address[ 'City' ]; ?></td>
								<td>
									<a href="<?php echo $address[ 'Website' ]; ?>"><?php echo $address[ 'Company' ]; ?></a>
								</td>
								<td><?php echo $address[ 'Accepting' ]; ?></td>

							</tr>
						<?php endforeach;
					endif;
					?>
					</tbody>
				</table>
			</div>
		</div>
	</section>

	<section class="camps-map">
		<div class="container-fluid">

			<?php
			$title_after_map = makercamp_defaults_customizer( 'title_after_map' );
			if ( ! empty( $title_after_map ) ) :
				?>
				<h1 class="container-fluid">
					<?php echo $title_after_map; ?>
				</h1>
			<?php endif; ?>

			<?php $description_after_map = makercamp_defaults_customizer( 'description_after_map' );
			if ( ! empty( $description_after_map ) ):
				?>
				<p><?php echo $description_after_map; ?></p>
			<?php endif; ?>

		</div>
	</section>

  <section class="host-a-camp-hero" id="host">
    <article>
      <?php
        $host_hero_title = makercamp_defaults_customizer('host_hero_title');
        if (!empty($host_hero_title)) :
      ?>
      <h1><?php echo $host_hero_title ?></h1>
      <?php
        endif;

        $host_hero_text = makercamp_defaults_customizer('host_hero_text');
        if (!empty($host_hero_text)) :
      ?>
      <p><?php echo $host_hero_text ?></p>
      <?php
          endif;

        $host_hero_link = makercamp_defaults_customizer('host_hero_link');
        if (!empty($host_hero_link)) :
      ?>
      <a class="apply-now" href="<?php echo $host_hero_link ?>" target="_blank">
        <?php
          $host_hero_link_title = makercamp_defaults_customizer('host_hero_link_title');
          if (!empty($host_hero_link_title)) :
            echo $host_hero_link_title;
          endif;
        ?>
      </a>
      <?php endif; ?>
    </article>
  </section>

  <section class="plane-future">
    <div class="container-fluid">
      <?php $host_first_section_title = makercamp_defaults_customizer('host_first_section_title');
      if (!empty($host_first_section_title)) :
        ?>
        <h1><?php echo $host_first_section_title; ?></h1>
      <?php endif; ?>

      <ul class="plane-future-steps">
        <li>
          <span class="first-step">1</span>

          <?php $host_first_section_first_text = makercamp_defaults_customizer('host_first_section_first_text');
          if (!empty($host_first_section_first_text)) :
            ?>
            <p><?php echo $host_first_section_first_text; ?></p>
          <?php endif; ?>

        </li>
        <li>
          <span class="second-step">2</span>

          <?php $host_first_section_second_text = makercamp_defaults_customizer('host_first_section_second_text');
          if (!empty($host_first_section_second_text)) :
            ?>
            <p><?php echo $host_first_section_second_text; ?></p>
          <?php endif; ?>

        </li>
      </ul>
      <ul class="plane-future-steps">
        <li>
          <span class="third-step">3</span>

          <?php $host_first_section_third_text = makercamp_defaults_customizer('host_first_section_third_text');
          if (!empty($host_first_section_third_text)) :
            ?>
            <p><?php echo $host_first_section_third_text; ?></p>
          <?php endif; ?>

        </li>
        <li>
          <span class="fourth-step">4</span>

          <?php $host_first_section_fourth_text = makercamp_defaults_customizer('host_first_section_fourth_text');
          if (!empty($host_first_section_fourth_text)) :
            ?>
            <p><?php echo $host_first_section_fourth_text; ?></p>
          <?php endif; ?>

        </li>
      </ul>
    </div>
  </section>

	<!-- Quick fix for URLs that are missing the http and become 404s -->
	<script>
		$(document).ready(function () {
			$('.camp-search a:not([href^="http://"]):not([href^="https://"])').each(function () {
				$(this).attr('href', 'http://' + $(this).attr('href'));
			})
		})
	</script>
	<!-- End Quick fix for URLs that are missing the http and become 404s -->

<?php get_footer(); ?>