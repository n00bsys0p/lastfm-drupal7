<?php 
  drupal_add_css(drupal_get_path('module', 'lastfm') . '/lastfm-top-artists.css');
  $value = '#text'; 
?>

<p>Here are the top 10 artists that I listen to most:</p>

<ol class="lastfm-top-artists">
<?php /*$artists = */
foreach($artists as $artist) { ?>
  <li>
    <p><strong><a href="<?php print $artist->url ?>"><?php print $artist->name; ?></a></strong><br />
    I've listened to <?php print $artist->name; ?> <?php print $artist->playcount; ?> times.</p>
    <img src="<?php print $artist->image[3]->$value; ?>" class="lastfm-artist">
  </li>
<?php } ?>
</ol>
