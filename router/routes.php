<?php
use App\Services\Router;
use App\Controllers\Auth;
use App\Controllers\Theme;
use App\Controllers\Post;
use App\Controllers\Comment;



Router::page('/register','register');
Router::page('/home','home');
Router::page('/profile','profile');


Router::post('/auth/register', Auth::class, 'register',true,true);
Router::post('/auth/login', Auth::class, 'login',true);
Router::post('/auth/logout', Auth::class, 'logout');



Router::enable();