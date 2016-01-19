<?php

namespace Socmednet\Providers;

use Blade;
use Illuminate\Support\ServiceProvider;

    
    function generate_table(array $headers, array $data = null)
    {
        $table_str = '';
            
            $table_str += '<thead>';
            $table_str += '<tr>';
            foreach ($headers as $header) {
                $table_str += '<th>';
                $table_str += $header->name;
                $table_str += '</th>';
            }
            $table_str += '</tr>';
            $table_str += '</thead>';
            
            return $table_str;
    }
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
