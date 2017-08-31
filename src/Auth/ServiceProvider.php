<?php
/**
 * Part of the testioc package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the MIT License.
 *
 * @package    Testioc
 * @version    1.00
 * @author     Nazmul Hasan
 * @license    MIT
 * @copyright  (c) 2017
 * @link       http://orocoder.com
 */

namespace Nazmulhasan\Testioc\Auth;

use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class ServiceProvider extends LaravelServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('testioc', function () {
            return new Registration();
        });
    }
}
