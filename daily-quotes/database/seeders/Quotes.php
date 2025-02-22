<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Quotes extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(): void
  {
    //

    $quotes = [
      [
        'id' => 1,
        'quote' =>
          'The only limit to our realization of tomorrow is our doubts of today.',
        'author' => 'Franklin D. Roosevelt',
        'user_id' => 1,
      ],
      [
        'id' => 2,
        'quote' => 'The best way to predict the future is to invent it.',
        'author' => 'Alan Kay',
        'user_id' => 1,
      ],
      [
        'id' => 3,
        'quote' => 'Life is 10% what happens to us and 90% how we react to it.',
        'author' => 'Charles R. Swindoll',
        'user_id' => 1,
      ],
      [
        'id' => 4,
        'quote' =>
          "Your time is limited, so don't waste it living someone else's life.",
        'author' => 'Steve Jobs',
        'user_id' => 1,
      ],
      [
        'id' => 5,
        'quote' => 'The purpose of our lives is to be happy.',
        'author' => 'Dalai Lama',
        'user_id' => 1,
      ],
      [
        'id' => 6,
        'quote' => 'Get busy living or get busy dying.',
        'author' => 'Stephen King',
        'user_id' => 1,
      ],
      [
        'id' => 7,
        'quote' =>
          'You have within you right now, everything you need to deal with whatever the world can throw at you.',
        'author' => 'Brian Tracy',
        'user_id' => 1,
      ],
      [
        'id' => 8,
        'quote' => "Believe you can and you're halfway there.",
        'author' => 'Theodore Roosevelt',
        'user_id' => 1,
      ],
      [
        'id' => 9,
        'quote' => 'The only way to do great work is to love what you do.',
        'author' => 'Steve Jobs',
        'user_id' => 1,
      ],
      [
        'id' => 10,
        'quote' => 'If you can dream it, you can do it.',
        'author' => 'Walt Disney',
        'user_id' => 1,
      ],
      [
        'id' => 11,
        'quote' =>
          'The future belongs to those who believe in the beauty of their dreams.',
        'author' => 'Eleanor Roosevelt',
        'user_id' => 1,
      ],
      [
        'id' => 12,
        'quote' =>
          'Do not wait to strike till the iron is hot; but make it hot by striking.',
        'author' => 'William Butler Yeats',
        'user_id' => 1,
      ],
      [
        'id' => 13,
        'quote' =>
          'Success is not the key to happiness. Happiness is the key to success.',
        'author' => 'Albert Schweitzer',
        'user_id' => 1,
      ],
      [
        'id' => 14,
        'quote' => 'You miss 100% of the shots you don’t take.',
        'author' => 'Wayne Gretzky',
        'user_id' => 1,
      ],
      [
        'id' => 15,
        'quote' =>
          'I attribute my success to this I never gave or took any excuse.',
        'author' => 'Florence Nightingale',
        'user_id' => 1,
      ],
      [
        'id' => 16,
        'quote' => 'The best revenge is massive success.',
        'author' => 'Frank Sinatra',
        'user_id' => 1,
      ],
      [
        'id' => 17,
        'quote' => 'The harder I work, the luckier I get.',
        'author' => 'Gary Player',
        'user_id' => 1,
      ],
      [
        'id' => 18,
        'quote' => 'Don’t watch the clock; do what it does. Keep going.',
        'author' => 'Sam Levenson',
        'user_id' => 1,
      ],
      [
        'id' => 19,
        'quote' =>
          'The secret of success is to do the common thing uncommonly well.',
        'author' => 'John D. Rockefeller Jr.',
        'user_id' => 1,
      ],
      [
        'id' => 20,
        'quote' => 'You must be the change you wish to see in the world.',
        'author' => 'Mahatma Gandhi',
        'user_id' => 1,
      ],
      [
        'id' => 21,
        'quote' => 'Act as if what you do makes a difference. It does.',
        'author' => 'William James',
        'user_id' => 1,
      ],
      [
        'id' => 22,
        'quote' =>
          'Keep your face always toward the sunshine—and shadows will fall behind you.',
        'author' => 'Walt Whitman',
        'user_id' => 1,
      ],
      [
        'id' => 23,
        'quote' =>
          'The only place where success comes before work is in the dictionary.',
        'author' => 'Vidal Sassoon',
        'user_id' => 1,
      ],
      [
        'id' => 24,
        'quote' =>
          'What lies behind us and what lies before us are tiny matters compared to what lies within us.',
        'author' => 'Ralph Waldo Emerson',
        'user_id' => 1,
      ],
      [
        'id' => 25,
        'quote' =>
          'To succeed in life, you need two things ignorance and confidence.',
        'author' => 'Mark Twain',
        'user_id' => 1,
      ],
      [
        'id' => 26,
        'quote' => "It always seems impossible until it's done.",
        'author' => 'Nelson Mandela',
        'user_id' => 1,
      ],
      [
        'id' => 27,
        'quote' =>
          'Success is not final, failure is not fatal it is the courage to continue that counts.',
        'author' => 'Winston Churchill',
        'user_id' => 1,
      ],
      [
        'id' => 28,
        'quote' => 'What you do today can improve all your tomorrows.',
        'author' => 'Ralph Marston',
        'user_id' => 1,
      ],
      [
        'id' => 29,
        'quote' =>
          'The only way to achieve the impossible is to believe it is possible.',
        'author' => 'Charles Kingsleigh',
        'user_id' => 1,
      ],
      [
        'id' => 30,
        'quote' => 'The biggest risk is not taking any risk.',
        'author' => 'Mark Zuckerberg',
        'user_id' => 1,
      ],
    ];

    DB::table('quotes')->insert($quotes);
  }
}
