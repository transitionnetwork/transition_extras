<div class="panel-display hometus clear-block" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>

  <?php if ($content['banner_top']): // ----------------------------------------------- ?>
    <div class="panel-panel panel-banner hometus-top">
      <div class="inside"><?php print $content['banner_top']; ?></div>
    </div>    
  <?php endif ?>

  <?php if ($content['top_left'] || $content['top_right']): ?>
    <div class="main-wrapper">
      <div class="panel-panel panel-col-first">
        <div class="inside"><?php print $content['top_left']; ?></div>
      </div>
      <div class="panel-panel panel-col-last">
        <div class="inside"><?php print $content['top_right']; ?></div>
      </div>
    </div>    
  <?php endif ?>


  <?php if ($content['banner_above']): // ----------------------------------------------- ?>
    <div class="panel-panel panel-banner hometus-above">
      <div class="inside"><?php print $content['banner_above']; ?></div>
    </div>    
  <?php endif ?>


  <?php if ($content['above_quad_1'] || $content['above_quad_2'] || $content['above_quad_3'] || $content['above_quad_4']): ?>
    <div class="quad-wrapper">
      <div class="panel-panel panel-col-first">
        <div class="inside"><?php print $content['above_quad_1']; ?></div>
      </div>
      <div class="panel-panel panel-col-second">
        <div class="inside"><?php print $content['above_quad_2']; ?></div>
      </div>
      <div class="panel-panel panel-col-third">
        <div class="inside"><?php print $content['above_quad_3']; ?></div>
      </div>
      <div class="panel-panel panel-col-fourth">
        <div class="inside"><?php print $content['above_quad_4']; ?></div>
      </div>
    </div>
  <?php endif ?>


  <?php if ($content['middle_left'] || $content['middle_right']): ?>
    <div class="main-wrapper">
      <div class="panel-panel panel-col-first">
        <div class="inside"><?php print $content['middle_left']; ?></div>
      </div>
      <div class="panel-panel panel-col-last">
        <div class="inside"><?php print $content['middle_right']; ?></div>
      </div>
    </div>    
  <?php endif ?>
  

  <?php if ($content['banner_below']): ?>
    <div class="panel-panel panel-banner hometus-below">
      <div class="inside"><?php print $content['banner_below']; ?></div>
    </div>    
  <?php endif ?>


  <?php if ($content['below_quad_1'] || $content['below_quad_2'] || $content['below_quad_3'] || $content['below_quad_4']): ?>
    <div class="quad-wrapper">
      <div class="panel-panel panel-col-first">
        <div class="inside"><?php print $content['below_quad_1']; ?></div>
      </div>
      <div class="panel-panel panel-col-second">
        <div class="inside"><?php print $content['below_quad_2']; ?></div>
      </div>
      <div class="panel-panel panel-col-third">
        <div class="inside"><?php print $content['below_quad_3']; ?></div>
      </div>
      <div class="panel-panel panel-col-fourth">
        <div class="inside"><?php print $content['below_quad_4']; ?></div>
      </div>
    </div>
  <?php endif ?>


  <?php if ($content['bottom_left'] || $content['bottom_right']): ?>
    <div class="main-wrapper">
      <div class="panel-panel panel-col-first">
        <div class="inside"><?php print $content['bottom_left']; ?></div>
      </div>
      <div class="panel-panel panel-col-last">
        <div class="inside"><?php print $content['bottom_right']; ?></div>
      </div>
    </div>    
  <?php endif ?>


  <?php if ($content['banner_bottom']): ?>
    <div class="panel-panel panel-banner hometus-bottom">
      <div class="inside"><?php print $content['banner_bottom']; ?></div>
    </div>    
  <?php endif ?>

</div>
