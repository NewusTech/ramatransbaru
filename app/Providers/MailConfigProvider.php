<?php

namespace App\Providers;

use App\Models\Smtp;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class MailConfigProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $settings = Cache::remember('settings', now()->addDays(30), function () {
            if (Schema::hasTable('smtps')) {
                $mail = DB::table('smtps')->first();
                if ($mail) {
                    return [
                        'driver' => $mail->driver,
                        'port' => $mail->port,
                        'host' => $mail->host,
                        'from' => ['address' => $mail->sender_email, 'name' => $mail->sender_name],
                        'encryption' => $mail->encryption,
                        'username' => $mail->username,
                        'password' => $mail->password,
                        'sendmail' => '/usr/sbin/sendmail -bs',
                        'pretend' => false,
                    ];
                }
            }
            return []; // Mengembalikan array kosong jika tidak ada hasil dari query
        });

        // Pastikan $settings adalah array yang valid
        if (!is_array($settings)) {
            $settings = [];
        }

        config()->set('settings', $settings); // optional

        // Merge konfigurasi mail yang ada dengan $settings
        config()->set('mail', array_merge(config('mail'), $settings));
    }
}
