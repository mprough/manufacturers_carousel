Name
====
Manufacturers Carousel 


Version
=======
v1.0.1

Support
=======
https://pro-webs-support.com/
PRO-Webs, Inc.

Description
===========
This will allow you have a carousel of manufacturers images on a carousel, usually you would place this on the home page.

Then taking those values set up your values in Admin -> Configuration  -> Manufacturers Carousel 


Affects DB
==========
Yes


DISCLAIMER
==========
Installation of this contribution is done at your own risk.
Backup your ZenCart database and any and all applicable files before proceeding.


Requirements:
=============


Install:
========

1. Backup anything you may be weary of losing. (Everything)
2. Upload the files in the YOUR_TEMPLATE directory to the directory that holds your template
3. Upload the files renaming YOUR_ADMIN to you admin directory
4. Once you load your admin the module will self install.
5. Add the code below to where you would like the carousel to appear:
<?php require($template->get_template_dir('tpl_manufacturers_carousel.php',DIR_WS_TEMPLATE, $current_page_base,'templates'). '/tpl_manufacturers_carousel.php');?>


Tips
====

IF you have any problems with your install, run uninstall.sql it will re-install itself.


UNINSTALL
====
1. Remove all the files included
2. Run the uninstall.sql


DISCLAIMER
=======
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
(LICENSE) along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
