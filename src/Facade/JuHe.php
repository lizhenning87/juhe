<?php
/**
 * Created by PhpStorm.
 * User: lzning
 * Date: 2018/12/10
 * Time: 3:58 PM
 */

namespace Zning\JuHe\Facade;


use Illuminate\Support\Facades\Facade;

class JuHe extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'juhe';
    }

}