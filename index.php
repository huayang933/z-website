<?php

require_once __DIR__ . '/router.php';

get('/', 'home.php');
get('/about', 'about.php');
get('/faq', 'faq.php');
get('/portfolio', 'portfolio.php');
get('/contact', 'contact.php');

