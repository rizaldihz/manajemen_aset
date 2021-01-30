<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\Repositories\IJenisAssetRepository;
use App\Interfaces\Repositories\IAssetRepository;
use App\Repositories\JenisAssetRepository;
use App\Repositories\AssetRepository;
use Carbon\Carbon;

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
        $app = $this->app;

        config(['app.locale' => 'id']);
        Carbon::setLocale('id');
        date_default_timezone_set('Asia/Jakarta');

        $this->app->singleton(IJenisAssetRepository::class, function () use ($app) {
            return $app->make(JenisAssetRepository::class);
        });
        $this->app->singleton(IAssetRepository::class, function () use ($app) {
            return $app->make(AssetRepository::class);
        });

        $this->app->bind(
            'App\Services\Plugins\Excel\IExcelExportManager',
            'App\Services\Plugins\Excel\Maatwebsite\MaatwebsiteExcelExport'
        );
    }
}
