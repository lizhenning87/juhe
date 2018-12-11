<?php
/**
 * Created by PhpStorm.
 * User: lzning
 * Date: 2018/12/10
 * Time: 2:57 PM
 */

namespace Zning\JuHe\plugins;

//车辆违法

class VehicleIllegal
{

    //小型汽车
    const HPZL_XX = '02';
    //大型汽车
    const HPZL_DX = '01';
    //新能源小型车
    const HPZL_XN_XX = '52';
    //新能源大型车
    const HPZL_XN_DX = '51';


    protected $api_key;

    public function __construct($key)
    {
        $this->api_key = $key;
    }

    //获取支持的城市列表
    public function city() {

        $params['key'] = $this->api_key;
        $params['dtype'] = 'json';

        $url = 'http://v.juhe.cn/wz/citys';

        $response = HttpUtil::doHttpPost($url, $params);

        return $response;

    }


    /**
     * @param $city
     * @param $hphm
     * @param $hpzl
     * @param string $engineno
     * @param string $classno
     * @param null $queryId
     * @param bool $log
     * @return bool|mixed
     *
     * 获取违章信息
     */

    public function illegal($city, $hphm, $hpzl, $engineno = '', $classno = '') {

        $params['key'] = $this->api_key;
        $params['dtype'] = 'json';
        $params['city'] = $city;
        $params['hphm'] = urlencode($hphm);
        $params['hpzl'] = $hpzl;
        $params['engineno'] = $engineno;
        $params['classno'] = $classno;

        $url = 'http://v.juhe.cn/wz/query';

        $response = HttpUtil::doHttpPost($url, $params);

        return $response;

    }


    //获取剩余次数
    public function status() {

        $params['key'] = $this->api_key;
        $params['dtype'] = 'json';

        $url = 'http://v.juhe.cn/wz/status';

        $response = HttpUtil::doHttpPost($url, $params);

        return $response;

    }



}