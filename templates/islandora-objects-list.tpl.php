<?php

/**
 * @file
 * Render a bunch of objects in a list or grid view.
 */
?>

<div class="islandora-objects-list">
  <?php $row_field = 0; ?>
  <?php foreach($objects as $object): ?>
    <?php $first = ($row_field == 0) ? 'first' : ''; ?>
    <div class="islandora-objects-list-item clearfix">
      <dl class="islandora-object <?php print $object['class']; ?>">
        <dt class="islandora-object-thumb">
          <?php print $object['thumb']; ?>
        </dt>
        <dd class="islandora-object-caption <?php print $object['class']?> <?php print $first; ?>">
          <?php print views_embed_view('list_style_field_view', 'block', $object['pid']); ?>
        </dd>
      </dl>
    </div>
    <?php $row_field++; ?>
  <?php endforeach; ?>
</div>
