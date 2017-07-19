<?php

Route::get ( '/', 'viewControl@getData' );
Route::post ( '/journalsend', 'viewControl@generalLedger' );

Route::get ( '/General-Ledger', 'viewControl@viewGenLedger' );
Route::get ( '/Trial-Balance', 'viewControl@viewTrialBalance' );
Route::get ( '/test', 'viewControl@test' );
Route::post ( '/getClient', 'viewControl@getClient' );
