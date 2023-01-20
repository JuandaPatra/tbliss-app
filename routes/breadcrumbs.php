<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
// Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
//     $trail->push('Home', route('home'));
// });


// Dashboard
Breadcrumbs::for('home', function (BreadcrumbTrail $trail) {
    $trail->push('Home', route('home'));
});


// Breadcrumbs::for('product', function (BreadcrumbTrail $trail) {
//     $trail->push('Product', route('products.index'));
// });

Breadcrumbs::for('news', function (BreadcrumbTrail $trail) {
    $trail->push('News',route('news.index') );
});


// Home > Blog
Breadcrumbs::for('news-list', function (BreadcrumbTrail $trail) {
    $trail->parent('news');
    $trail->push('List', route('news.index'));
});

Breadcrumbs::for('news-create', function (BreadcrumbTrail $trail) {
    $trail->parent('news');
    $trail->push('Create', route('news.create'));
});

// Home > Blog > [Category]
Breadcrumbs::for('category', function (BreadcrumbTrail $trail, $category) {
    $trail->parent('blog');
    $trail->push($category->title, route('category', $category));
});
