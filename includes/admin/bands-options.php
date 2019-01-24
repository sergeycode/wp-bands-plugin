<?php

function bands_options_mb($post) {

  $bands_data = get_post_meta($post->ID, 'bands_data', true);

  if(!$bands_data) {
    $bands_data = array(
      'name' => '',
      'origin' => '',
      'genre' => 'Alternative',
      'years' => '',
      'labels' => '',
      'website' => '',
      'members' => ''
    );
  }

  ?>
  <div class="form-group">
    <label for="name">Band Name</label>
    <input type="text" class="form-control" id="name" placeholder="Enter band name" name="bands_name" value="<?php echo $bands_data['name']; ?>">
  </div>

  <div class="form-group">
    <label for="origin">Origin</label>
    <input type="text" class="form-control" id="origin" placeholder="Enter band origin" name="bands_origin" value="<?php echo $bands_data['origin']; ?>">
  </div>

  <div class="form-group">
    <label for="genre">Genre</label>
    <select class="form-control" id="genre" name="bands_genre">
      <option value="Alternative">Alternative</option>
      <option value="Rock" <?php echo $bands_data['genre'] == "Rock" ? 'selected' : ''; ?>>Rock</option>
      <option value="Pop" <?php echo $bands_data['genre'] == "Pop" ? 'selected' : ''; ?>>Pop</option>
      <option value="Metal" <?php echo $bands_data['genre'] == "Metal" ? 'selected' : ''; ?>>Metal</option>
      <option value="Indie" <?php echo $bands_data['genre'] == "Indie" ? 'selected' : ''; ?>>Indie</option>
    </select>
  </div>

  <div class="form-group">
    <label for="years">Years active</label>
    <input type="text" class="form-control" id="years" placeholder="Enter Years" name="bands_years" value="<?php echo $bands_data['years']; ?>">
  </div>

  <div class="form-group">
    <label for="labels">Labels</label>
    <input type="text" class="form-control" id="labels" placeholder="Enter labels" name="bands_labels" value="<?php echo $bands_data['labels']; ?>">
  </div>

  <div class="form-group">
    <label for="website">Website</label>
    <input type="text" class="form-control" id="website" placeholder="Enter website" name="bands_website" value="<?php echo $bands_data['website']; ?>">
  </div>

  <div class="form-group">
    <label for="members">Members</label>
    <input type="text" class="form-control" id="members" placeholder="Enter members" name="bands_members" value="<?php echo $bands_data['members']; ?>">
  </div>
  <?php
}