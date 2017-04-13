<?php
/**
 * @file
 * Template file for the paged TEI seadragon viewer.
 */
?>
<?php if ($tei_pages_populated): ?>

  <div class="paged-tei-seadragon-viewer-left-toolbar">
    <div class="left-toolbar">
      <?php if (isset($seadragon) && $tei): ?>
        <button title="<?php print t("Toggle TEI");?>" type="button" id="paged-tei-seadragon-viewer-tei-toggle"><?php print t("Toggle TEI");?></button>
      <?php endif; ?>
    </div>
    <div class="tei-pager-wrapper">
      <?php print isset($pager) ? $pager : '';?>
    </div>
    <div class="paged-tei-seadragon-viewer-right-toolbar">
      <?php print isset($clipper) ? $clipper : '';?>
      <div class="paged-tei-seadragon-viewer-download-datastreams" title="<?php print t("Download available datastreams");?>">
        <?php print isset($datastreams) && $tei ? $datastreams : '';?>
      </div>

    </div>
  </div>

  <div>

  <?php if ($tei): ?>
    <div class="paged-tei-seadragon-viewer-pane" id="paged-tei-seadragon-viewer-tei-pane<?php print $tei_pane_class; ?>">
      <div id="paged-tei-seadragon-viewer-tei">
        <?php print $tei;?>
      </div>
    </div>
  <?php endif; ?>
  <div class="paged-tei-seadragon-viewer-pane" id="paged-tei-seadragon-viewer-seadragon-pane">
    <div>
    </div>
    <div id="paged-tei-seadragon-viewer-seadragon">
      <?php print isset($seadragon) ? $seadragon : '';?>
    </div>
  </div>

  </div>
<?php else: ?>
  <p><?php print t('This manuscript currently does not contain any page image(s) or text.'); ?></p>
<?php endif; ?>
