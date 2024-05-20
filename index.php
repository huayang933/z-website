<?php

require_once __DIR__ . '/router.php';

get('/', 'home.php');
get('/services', 'services.php');
get('/about', 'about.php');
get('/portfolio', 'portfolio.php');
get('/contact', 'contact.php');

