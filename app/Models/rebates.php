<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rebates extends Model
{
    use HasFactory;
p
    public static function  search($search)

    {
        return empty($search) ? static ::query()
    :static ::query()->where('id','like','%',$search, '%')   

    ->orWhere('name','like', '%');

}
}
