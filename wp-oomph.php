<?php
/*
 * Plugin Name: WP-Oomph
 * Version: 0.2
 * Plugin URI: http://maymay.net/blog/2008/11/11/wp-oomph-add-the-oomph-microformat-overlay-to-your-wordpress-blog/
 * Description: Adds the Oomph Microformats toolkit's microformat overlay to any WordPress-generated pages (as long as the page has a microformat in it, of course).
 * Author: Meitar "maymay" Moscovitz
 * Author URI: http://maymay.net/
 *
 * @file wp-oomph.php
 * @license GPL3 
 *
 *  Copyright 2008  Meitar Moscovitz  (email : meitar@maymay.net)
 *
 *  This program is free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program; if not, write to the Free Software
 *  Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 *
 */

if (!is_admin()) {
    // WordPress comes with jQuery, so we'll make use of that and list it as a dependency here.
    wp_enqueue_script('oomph-js', 'https://visitmix.com/labs/oomph/2.0/Client/oomph.min.js', array('jquery'), '2.0', true);
}
?>
