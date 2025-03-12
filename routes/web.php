<?php

use Botble\Base\Facades\AdminHelper;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Botble\Membership\Http\Controllers', 'middleware' => ['web', 'core']], function () {
    AdminHelper::registerRoutes(function () {
        Route::group(['prefix' => 'settings/memberships', 'as' => 'membership.settings', 'permission' => 'membership.settings'], function () {
            Route::get('/', [
                'uses' => 'Settings\MembershipSettingController@edit',
            ]);

            Route::put('/', [
                'as' => '.update',
                'uses' => 'Settings\MembershipSettingController@update',
            ]);
        });
    });
});
