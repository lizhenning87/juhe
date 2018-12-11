<?php
/**
 * Created by PhpStorm.
 * User: lzning
 * Date: 2018/12/10
 * Time: 2:53 PM
 */

namespace Zning\JuHe;

use Zning\JuHe\Exceptions\InvalidArgumentException;
use Zning\JuHe\plugins\VehicleIllegal;

class JuHe
{

    protected $api_key;


    public function __construct($key)
    {
        if ($key == null || $key == '')
        {
            throw new InvalidArgumentException("缺少配置参数,请确认services.php中的配置");
        }

        $this->api_key = $key;
    }



    //获取车辆违章查询
    public function vehicleIllegal() {

        return new VehicleIllegal($this->api_key);
    }

}