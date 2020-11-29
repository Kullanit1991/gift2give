<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubMenu extends Model
{
    use HasFactory;

    
        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'submenu_name',
        'menu_group_id',
        'status'
    ];
}
