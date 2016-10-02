<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 25-08-2016
 * Time: 15:57
 */

namespace Aston;


use App\Faculty;
use App\Post;

class AstonCalls
{
        public static function hello()
        {
            return "hello";
        }

        public static function Faculties()
        {
            return Faculty::all()->pluck('name','id');
        }

      
}