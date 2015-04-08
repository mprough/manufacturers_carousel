<?php
// use $configuration_group_id where needed
$zc150 = (PROJECT_VERSION_MAJOR > 1 || (PROJECT_VERSION_MAJOR == 1 && substr(PROJECT_VERSION_MINOR, 0, 3) >= 5));
if ($zc150) { // continue Zen Cart 1.5.0
  // delete configuration menu
  $db->Execute("DELETE FROM ".TABLE_ADMIN_PAGES." WHERE page_key = 'configMfgsCarousel' LIMIT 1;");
  // add configuration menu
  if (!zen_page_key_exists('configMfgsCarousel')) {
    if ((int)$configuration_group_id > 0) {
      zen_register_admin_page('configMfgsCarousel',
                              'MANUFACTURERS_CAROUSEL', 
                              'FILENAME_CONFIGURATION',
                              'gID=' . $configuration_group_id, 
                              'configuration', 
                              'Y',
                              $configuration_group_id);
        
      $messageStack->add('Enabled Manufacturers Carousel Configuration Menu.', 'success');
    }
  }
}

$db->Execute("INSERT INTO " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, last_modified, date_added, use_function, set_function) VALUES
            ('Carousel Width', 'MANUFACTURERS_CAROUSEL_WIDTH', '410', 'Width of Carousel in px (Example 410 would be 410px)', " . $configuration_group_id . ", 2, NOW(), NOW(), NULL, ''), 
            ('Carousel Enabled', 'MANUFACTURERS_CAROUSEL_ENABLED', 'true', 'Carousel Enabled?', " . $configuration_group_id . ", 1, NOW(), NOW(), NULL, 'zen_cfg_select_option(array(\"true\", \"false\"),'),
            ('Items Scale Up', 'MANUFACTURERS_CAROUSEL_SCALE_UP', 'true', 'Scale up images?', " . $configuration_group_id . ", 4, NOW(), NOW(), NULL, 'zen_cfg_select_option(array(\"true\", \"false\"),'),
            ('Auto Play', 'MANUFACTURERS_CAROUSEL_AUTO_PLAY', 'true', 'Auto Play?', " . $configuration_group_id . ", 5, NOW(), NOW(), NULL, 'zen_cfg_select_option(array(\"true\", \"false\"),'),
            ('Stop on Hover', 'MANUFACTURERS_CAROUSEL_HOVER_STOP', 'true', 'Stop the rotation on hover?', " . $configuration_group_id . ", 6, NOW(), NOW(), NULL, 'zen_cfg_select_option(array(\"true\", \"false\"),'),
            ('Auto Height', 'MANUFACTURERS_CAROUSEL_AUTO_HEIGHT', 'true', 'Auto Height?', " . $configuration_group_id . ", 7, NOW(), NOW(), NULL, 'zen_cfg_select_option(array(\"true\", \"false\"),')");
