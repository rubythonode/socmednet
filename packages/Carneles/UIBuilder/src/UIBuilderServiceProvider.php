<?php

 namespace Carneles\UIBuilder;
 
 use Illuminate\Support\ServiceProvider;
 
 class UIBuilderServiceProvider extends ServiceProvider 
 {
     public function register() 
     {
         $this->app->bind('uibuilder', function($app) {
             return new UIBuilder;
         });
     }
     
     public function boot()
     {
     }
 }