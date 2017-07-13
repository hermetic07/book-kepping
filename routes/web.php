<?php
Route::get ( '/home', 'viewControl@add' );
Route::post ( '/home-send', 'viewControl@sent' );

Route::get ( '/', 'viewControl@getData' );
Route::post ( '/journalsend', 'viewControl@generalLedger' );

Route::get ( '/General-Ledger', 'viewControl@viewGenLedger' );
Route::get ( '/Trial-Balance', 'viewControl@viewTrialBalance' );
