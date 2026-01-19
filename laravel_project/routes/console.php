<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

echo "console";
Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');
