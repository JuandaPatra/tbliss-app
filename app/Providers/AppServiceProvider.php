<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (env(key: 'APP_ENV') !== 'local') {
            URL::forceScheme(scheme: 'https');
        }

        Blade::directive('currency', function ($expression) {
            return "Rp. <?php echo number_format($expression,0,',','.'); ?>";
        });

        Blade::directive('formatDate', function ($date) {
            return "<?php echo ($date)->format('d').'  '.($date)->timezone('Asia/Jakarta'); ?>";
        });

        Blade::directive('formatDate', function($dateFrom){
            $time = strtotime($dateFrom);
            return "<?php echo ($time)->format('d').'  '.($time)->timezone('Asia/Jakarta'); ?>";
        });

        Blade::directive('formatDateTo', function($dateTo){
            $time = strtotime($dateTo);
            return "<?php echo ($time)->format('d M Y').'  '.($time)->timezone('Asia/Jakarta'); ?>";
        });
        Blade::directive('months', function($array){
            // $expressionValues = preg_split('/\s+/', $array['months']);
            return  $array[1]  ;

           
            $perMonth = $array['index'] *30;
            $time = strtotime($array['months'] . ' - '.$perMonth.' days');
            return "<?php echo ($time)->format('d M Y').'  '.($time)->timezone('Asia/Jakarta'); ?>";
        });
    }
}
