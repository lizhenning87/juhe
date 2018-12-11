<?php
/**
 * Created by PhpStorm.
 * User: lzning
 * Date: 2018/12/6
 * Time: 9:33 AM
 */

namespace Zning\JuHe;


class ServiceProvider extends \Illuminate\Support\ServiceProvider
{




    /**
     * Register the service provider.
     */
    public function register()
    {

        $this->app->singleton('juhe', function ($app) {
            return new JuHe(config('services.juhe.key'));
        });

    }



}