<?php

// Get a $twig object from this file.
require_once __DIR__ . '/../config/twig.php';
require '../src/public/products.php';

$name = 'Wilder';

echo $twig->render('details.html.twig', ['name' => $name]);