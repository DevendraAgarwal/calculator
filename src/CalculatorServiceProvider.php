<?php
namespace Sirdevendra\Calculator;

use Illuminate\Support\ServiceProvider;
use Sirdevendra\Calculator\Library\CalculatorService;

class CalculatorServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('cal', function(){
            return new CalculatorService();
        });
        
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
    }
}
