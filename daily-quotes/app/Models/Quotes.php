<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quotes extends Model
{
  protected $fillable = ['quote', 'author', 'user_id'];

  public static function getRandomQuote()
  {
    return self::inRandomOrder()->first();
  }
}
