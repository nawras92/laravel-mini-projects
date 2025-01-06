<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quotes extends Model
{
  protected $fillable = ['quote', 'author'];

  public static function getRandomQuote()
  {
    return self::inRandomOrder()->first();
  }
}
