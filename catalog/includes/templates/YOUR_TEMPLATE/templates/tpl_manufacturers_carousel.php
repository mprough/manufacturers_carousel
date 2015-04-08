<?php 
if(MANUFACTURERS_CAROUSEL_ENABLED == "true"){  
  $manufacturers_query = "select m.manufacturers_id, m.manufacturers_name, m.manufacturers_image, mi.manufacturers_url
    from " . TABLE_MANUFACTURERS . " m
    left join " . TABLE_MANUFACTURERS_INFO . " mi on m.manufacturers_id = mi.manufacturers_id
    order by manufacturers_name";
  global $db;
  $manufacturers = $db->Execute($manufacturers_query);
?>
<link rel="stylesheet" href="<?php echo $template->get_template_dir('',DIR_WS_TEMPLATE, $current_page_base,'css') ?>/manufacturers_carousel.css">
<link rel="stylesheet" href="<?php echo $template->get_template_dir('',DIR_WS_TEMPLATE, $current_page_base,'css') ?>/manufacturers_carousel_theme.css">
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="<?php echo $template->get_template_dir('',DIR_WS_TEMPLATE, $current_page_base,'jscript/jquery'); ?>/manufacturers_carousel.min.js"></script>
<div id="ld_manufacturerscarousel" class="owl-carousel" style="width:<?php echo MANUFACTURERS_CAROUSEL_WIDTH ?>px;">
  <?php while (!$manufacturers->EOF){ ?>
  <div> 
    <a href="<?php echo DIR_WS_CATALOG . 'index.php?main_page=index&amp;manufacturers_id=' . $manufacturers->fields['manufacturers_id'] ?>">
      <?php echo zen_image(DIR_WS_IMAGES . $manufacturers->fields['manufacturers_image'], '') ?>
    </a>
  </div>
  <?php 
    $manufacturers->MoveNext();
    }
  ?>
</div>
<?php require($template->get_template_dir('manufacturers_carousel.php',DIR_WS_TEMPLATE, $current_page_base,'jscript/jquery'). '/manufacturers_carousel.php');?>
    <?php
}
