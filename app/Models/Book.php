<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected static $books;
    protected static $image;
    protected static $imageName;
    protected static $imageDirectory;
    protected static $imageUrl;

    public static function newbook($request)
    {
        self::$image = $request->file('image');

        Book::imageUpload(self::$image);

        self::$books = new Book();
        self::$books->name           =      $request->name;
        self::$books->author         =      $request->author;
        self::$books->category       =      $request->category;
        self::$books->details        =      $request->details;
        self::$books->description    =      $request->description;
        self::$books->image          =      self::$imageUrl;
        self::$books->price          =      $request->price;
        self::$books->save();

    }


    public static function imageUpload($image, $product = null)
    {

        if ($image) {
            if (isset($books)) {
                if (file_exists($books->image)) {
                    unlink($books->image);
                }
            }
            self::$imageName = time() . rand(10, 1000) . '.' . $image->getClientOriginalExtension();
            self::$imageDirectory = 'assets/img/products/';
            $image->move(self::$imageDirectory, self::$imageName);
            self::$imageUrl = self::$imageDirectory . self::$imageName;
        } else {
            self::$imageUrl = $product->image;
        }
        return self::$imageUrl;
    }
}
