<?php

Route::group(['middleware' => 'apiLogger'], function() {
    Route::post('/login', 'Api\Auth\LoginController@login');
    Route::post('/register', 'Api\Auth\RegisterController@register');
    Route::post('/forgot-password', 'Api\Auth\ForgotPasswordController@forgotPassword');
    Route::post('/reset-password', 'Api\Auth\ForgotPasswordController@resetPassword');
    Route::get('users/{user}/auth', 'Api\Auth\ForgotPasswordController@temporaryLogin')->name('user.temporary.link');

    Route::get('/me', 'Api\Me\MeController@me');
    Route::group(['prefix' => 'users'], function() {
        Route::patch('/', 'Api\Me\MeController@update');
        Route::patch('/{user}', 'Api\Me\MeController@updateUserByAdmin');
        Route::delete('/{user}', 'Api\Me\MeController@deleteUser');
        Route::get('/', 'Api\Me\MeController@lists');
    });

    Route::group(['prefix' => 'roles'], function() {
        Route::get('/', 'Api\Role\RoleController@lists');
        Route::post('/', 'Api\Role\RoleController@store');
        Route::patch('/{role}', 'Api\Role\RoleController@update');
        Route::delete('/{role}', 'Api\Role\RoleController@delete');
        Route::patch('/{role}/permissions', 'Api\Role\RoleController@assignPermissions');
    });

    Route::group(['prefix' => 'permissions'], function() {
        Route::get('/', 'Api\Permission\PermissionController@lists');
        Route::post('/', 'Api\Permission\PermissionController@store');
        Route::patch('/{permission}', 'Api\Permission\PermissionController@update');
        Route::delete('/{permission}', 'Api\Permission\PermissionController@delete');
    });

    Route::group(['prefix' => 'mental-conditions'], function() {
       Route::get('/', 'Api\MentalCondition\MentalConditionController@list');
       Route::get('/{mentalCondition}', 'Api\MentalCondition\MentalConditionController@single');
       Route::post('/', 'Api\MentalCondition\MentalConditionController@store');
       Route::patch('/{mentalCondition}', 'Api\MentalCondition\MentalConditionController@update');
       Route::delete('/{mentalCondition}', 'Api\MentalCondition\MentalConditionController@delete');

       Route::group(['prefix' => '/{mentalCondition}/answers'], function() {
           Route::get('/', 'Api\Answer\AnswerController@lists');
           Route::post('/', 'Api\Answer\AnswerController@store');
       });

       Route::group(['prefix' => '/{mentalCondition}/questions'], function() {
           Route::get('/', 'Api\MentalCondition\MentalConditionQuestionController@lists');
           Route::post('/', 'Api\MentalCondition\MentalConditionQuestionController@store');
           Route::patch('/{mentalConditionQuestion}', 'Api\MentalCondition\MentalConditionQuestionController@update');
           Route::delete('/{mentalConditionQuestion}', 'Api\MentalCondition\MentalConditionQuestionController@delete');
       });
    });

    Route::get('/logout', 'Api\Me\MeController@logout');

    Route::get('/states', 'Api\State\StateController@lists');
    Route::get('/states/{state}/lgas', 'Api\State\StateController@lgaLists');
    Route::get('/medical-experts', 'Api\MedicalExpert\MedicalExpertController@lists');
});



