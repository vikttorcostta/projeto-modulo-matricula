<?php

/* CURSO TÉCNICO EM DESENVOLVIMENTO DE SISTEMAS
 * DISCIPLINA DE DESENVOLVIMENTO DE SISTEMAS
 * EQUIPE: DAVI CARIDADE, WENDEL, PAULO VICTOR
 * */

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();
