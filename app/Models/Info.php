<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    use HasFactory;
    protected static $info;
    public static function newinfo($request ,$id)
    {
        Book::find($id);
        self::$info = new Info();
        self::$info->Book_id          =      $request->id;
        self::$info->book_name        =      $request->name;
        self::$info->name             =      $request->name;
        self::$info->email            =      $request->email;
        self::$info->phone            =      $request->phone;
        self::$info->address          =      $request->address;
        self::$info->save();
    }
}
