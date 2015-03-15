<?php
namespace Affinity4API\Classes;

/**
 * Used to modify the Admin Menus
 * 
 * @since  1.0.0
 */
class AdminMenu
{

    public function __construct()
    {
        echo 'AdminMenu!';
        add_action( 'admin_menu', array( $this, 'rename_menu_item' ) );
    }

    /* 
     * MENU ITEM
     */
    public function set_menu_item( $menu_item_to_rename, $new_name )
    {
        global $menu;

        if ( !is_int( $menu_item_to_rename ) ) {
            switch( $menu_item_to_rename ) {
                case 'Dashboard' :
                    $menu_item_to_rename = 2;
                break;
                case 'Posts' :
                    $menu_item_to_rename = 5;
                break;
                case 'Media' :
                    $menu_item_to_rename = 10;
                break;
                case 'Pages' :
                    $menu_item_to_rename = 20;
                break;
                case 'Comments' :
                    $menu_item_to_rename = 25;
                break;
                default :
                    $menu_item_to_rename = 0;
                break;
            }

        }

        $menu[$menu_item_to_rename][0] = $new_name;
    }

    public function rename_menu_item() {
        // $this->set_menu_item( 'Posts', 'Testing' );
    }
}
