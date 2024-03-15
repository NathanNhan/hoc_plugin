<?php 

/*
 * Plugin Name:       My Plugin
 * Plugin URI:        https://trongnhandev.com/plugins/the-basics/
 * Description:       Handle the basics with this plugin.
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Trong Nhan
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       my-plugin
 * Domain Path:       /languages
 */

defined("ABSPATH") or die("You can not access directly");

//admin_menu hook
// Design patterns -> SingleTon
if(!class_exists('MyPlugin')) {
  class MyPlugin {
  public function __construct() {
   add_action( 'admin_menu', array($this, 'custom_admin_menu') );
  }

  function custom_admin_menu() {
    add_menu_page( 'All Employees', 'All Employess', 'manage_options', 'all-employees', array($this, 'render_employee'), '', 10 );
    add_submenu_page( 'all-employees', 'Add Employees', 'Add Employees', 'manage_options', 'add-employee', array($this, 'render_add_employee'), 1 );
  }
  //List Employees
  function render_employee() {
    ?> 
      <h1>List Employees</h1>
    <?php 
  }
  //Add Employee 
  function render_add_employee() {
    ?> 
      <h1>Add Employee</h1>
    <?php 
  }
 
}
}

// $plugins = new MyPlugin();
new MyPlugin;