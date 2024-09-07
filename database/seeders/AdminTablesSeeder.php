<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class AdminTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // base tables
        \Encore\Admin\Auth\Database\Menu::truncate();
        \Encore\Admin\Auth\Database\Menu::insert(
            [
                [
                    "parent_id" => 0,
                    "order" => 0,
                    "title" => "Helpers",
                    "icon" => "fa-gears",
                    "uri" => "",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 1,
                    "order" => 1,
                    "title" => "Scaffold",
                    "icon" => "fa-keyboard-o",
                    "uri" => "helpers/scaffold",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 1,
                    "order" => 2,
                    "title" => "Database terminal",
                    "icon" => "fa-database",
                    "uri" => "helpers/terminal/database",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 1,
                    "order" => 3,
                    "title" => "Laravel artisan",
                    "icon" => "fa-terminal",
                    "uri" => "helpers/terminal/artisan",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 1,
                    "order" => 4,
                    "title" => "Routes",
                    "icon" => "fa-list-alt",
                    "uri" => "helpers/routes",
                    "permission" => NULL
                ],
                [
                    "parent_id" => 0,
                    "order" => 5,
                    "title" => "Media manager",
                    "icon" => "fa-file",
                    "uri" => "media",
                    "permission" => NULL
                ]
            ]
        );

        \Encore\Admin\Auth\Database\Permission::truncate();
        \Encore\Admin\Auth\Database\Permission::insert(
            [
                [
                    "name" => "Admin helpers",
                    "slug" => "ext.helpers",
                    "http_method" => "",
                    "http_path" => "/helpers/*"
                ],
                [
                    "name" => "Media manager",
                    "slug" => "ext.media-manager",
                    "http_method" => "",
                    "http_path" => "/media*"
                ]
            ]
        );

        \Encore\Admin\Auth\Database\Role::truncate();
        \Encore\Admin\Auth\Database\Role::insert(
            [

            ]
        );

        // pivot tables
        DB::table('admin_role_menu')->truncate();
        DB::table('admin_role_menu')->insert(
            [

            ]
        );

        DB::table('admin_role_permissions')->truncate();
        DB::table('admin_role_permissions')->insert(
            [

            ]
        );

        // users tables
        \Encore\Admin\Auth\Database\Administrator::truncate();
        \Encore\Admin\Auth\Database\Administrator::insert(
            [

            ]
        );

        DB::table('admin_role_users')->truncate();
        DB::table('admin_role_users')->insert(
            [

            ]
        );

        DB::table('admin_user_permissions')->truncate();
        DB::table('admin_user_permissions')->insert(
            [

            ]
        );

        // finish
    }
}
