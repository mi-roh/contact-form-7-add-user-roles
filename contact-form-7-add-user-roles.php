<?php
/*
Plugin name:        Contact Form 7 - add User Roles
Plugin URI:         https://github.com/mi-roh/contact-form-7-add-user-roles/
Author:             Micha Rohde
Author              URI: https://github.com/mi-roh/contact-form-7-add-user-roles/
Version:            0.1.0
Description:        Adds custom User Roles for Contact Form 7
GitHub Plugin URI:  https://github.com/mi-roh/contact-form-7-add-user-roles/
Licence:            MIT

Copyright © 2016 Micha Rohde

Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated
documentation files (the “Software”), to deal in the Software without restriction, including without limitation the
rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit
persons to whom the Software is furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all copies or substantial portions of the
Software.

THE SOFTWARE IS PROVIDED “AS IS”, WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE
WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR
OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
*/


defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


if (!defined('WPCF7_ADMIN_READ_CAPABILITY')) {
    define( 'WPCF7_ADMIN_READ_CAPABILITY', 'wpcf7_read' );
}
if (!defined('WPCF7_ADMIN_READ_WRITE_CAPABILITY')) {
    define( 'WPCF7_ADMIN_READ_WRITE_CAPABILITY', 'wpcf7_write' );
}

require_once __DIR__ . '/lib/add_user_roles.php';


add_action( 'admin_init', array('MiRoh_CF7_Add_User_Roles', 'add_capability'));
add_action('activated_plugin', array('MiRoh_CF7_Add_User_Roles', 'init_order'));

