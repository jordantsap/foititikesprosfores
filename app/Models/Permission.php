<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permission extends \Spatie\Permission\Models\Permission{

    public static function defaultPermissions()
  {
    return [
      'view_newsletters',
      'create_newsletters',
      'update_newsletters',
      'delete_newsletters',

      'view_users',
      'create_users',
      'update_users',
      'delete_users',

      'view_roles',
      'create_roles',
      'update_roles',
      'delete_roles',

      'view_permissions',
      'create_permissions',
      'update_permissions',
      'delete_permissions',

      'view_articles',
      'create_articles',
      'update_articles',
      'delete_articles',

      'view_companies',
      'create_companies',
      'update_companies',
      'delete_companies',

      'view_products',
      'create_products',
      'update_products',
      'delete_products',

      'view_brands',
      'create_brands',
      'update_brands',
      'delete_brands',

      'company_management',
      'product_management',
      'order_management',
    ];
  }
}
