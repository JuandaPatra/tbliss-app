<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// News
Breadcrumbs::for('news', function (BreadcrumbTrail $trail) {
    $trail->push('News', route('news.index'));
});

// News > Edit
Breadcrumbs::for('edit-news', function (BreadcrumbTrail $trail, $news) {
    $trail->parent('news');
    $trail->push('Edit '. $news->title , route('news.edit', $news->id));
});


// Product > Create
Breadcrumbs::for('news-create', function (BreadcrumbTrail $trail) {
    $trail->parent('news');
    $trail->push('Create ' , route('news.create'));
});


// Product
Breadcrumbs::for('trip', function (BreadcrumbTrail $trail) {
    $trail->push('Trip', route('product.index'));
});


// Trip > Edit
Breadcrumbs::for('trip-edit', function (BreadcrumbTrail $trail, $product) {
    $trail->parent('trip');
    $trail->push('Edit '. $product->title , route('product.edit', $product->id));
});


// Trip > Create
Breadcrumbs::for('trip-create', function (BreadcrumbTrail $trail) {
    $trail->parent('trip');
    $trail->push('Create ' , route('product.create'));
});

// Trip > Include & Exclude
Breadcrumbs::for('trip-include', function (BreadcrumbTrail $trail, $product) {
    $trail->parent('trip');
    $trail->push('Include & Exclude '. $product->title , route('product.include', $product));
});

// Trip > Hidden Gem
Breadcrumbs::for('trip-hidden-gem', function (BreadcrumbTrail $trail, $product) {
    $trail->parent('trip');
    $trail->push('Hidden Gem / '. $product->title , route('product.pick', $product));
});

// Contact
Breadcrumbs::for('contact', function (BreadcrumbTrail $trail) {
    $trail->push('Contact', route('contact.index'));
});

// Slider
Breadcrumbs::for('slider', function (BreadcrumbTrail $trail) {
    $trail->push('Slider', route('slider.index'));
});

// Slider > Create
Breadcrumbs::for('slider-create', function (BreadcrumbTrail $trail) {
    $trail->parent('slider');
    $trail->push('Create ' , route('slider.create'));
});

// Slider > Edit
Breadcrumbs::for('slider-edit', function (BreadcrumbTrail $trail, $product) {
    $trail->parent('slider');
    $trail->push('Edit ' , route('slider.edit', $product->id));
});

// Activities
Breadcrumbs::for('activities', function (BreadcrumbTrail $trail) {
    $trail->push('Activities', route('activities.index'));
});

// Activities > Create
Breadcrumbs::for('activities-create', function (BreadcrumbTrail $trail) {
    $trail->parent('activities');
    $trail->push('Create ' , route('activities.create'));
});

// Activities > Edit
Breadcrumbs::for('activities-edit', function (BreadcrumbTrail $trail, $product) {
    $trail->parent('activities');
    $trail->push('Edit ' , route('activities.edit', $product->id));
});

// Hashtag
Breadcrumbs::for('hashtag', function (BreadcrumbTrail $trail) {
    $trail->push('Hashtag', route('hashtag.index'));
});

// Hashtag > Create
Breadcrumbs::for('hashtag-create', function (BreadcrumbTrail $trail) {
    $trail->parent('hashtag');
    $trail->push('Create ' , route('hashtag.create'));
});

// Hashtag > Edit
Breadcrumbs::for('hashtag-edit', function (BreadcrumbTrail $trail, $product) {
    $trail->parent('hashtag');
    $trail->push('Edit ' , route('hashtag.edit', $product->id));
});

// Payment
Breadcrumbs::for('payments', function (BreadcrumbTrail $trail) {
    $trail->push('Payment', route('payments.index'));
});


// User
Breadcrumbs::for('admin', function (BreadcrumbTrail $trail) {
    $trail->push('Admin', route('user-admin.index'));
});

// Admin > Create
Breadcrumbs::for('admin-create', function (BreadcrumbTrail $trail) {
    $trail->parent('admin');
    $trail->push('Create ' , route('user-admin.create'));
});


// Policy Syarat
Breadcrumbs::for('syarat', function (BreadcrumbTrail $trail) {
    $trail->push('Policy / Syarat', route('policy.syarat'));
});

// Policy Visa
Breadcrumbs::for('visa', function (BreadcrumbTrail $trail) {
    $trail->push('Policy / Visa & Ketentuan', route('policy.index'));
});

// Pick Hidden Gem
Breadcrumbs::for('pick-hidden-gem', function (BreadcrumbTrail $trail) {
    $trail->push('Pick Hidden Gems', route('choose-hidden-gem.index'));
});

// Contact
Breadcrumbs::for('contact-user', function (BreadcrumbTrail $trail) {
    $trail->push('Contact', route('contact'));
});

// Destinasi
Breadcrumbs::for('destinasi', function (BreadcrumbTrail $trail) {
    $trail->push('Destinasi ', route('continent.index'));
});

// Destinasi > Create
Breadcrumbs::for('destinasi-create', function (BreadcrumbTrail $trail) {
    $trail->parent('destinasi');
    $trail->push('Create ' , route('continent.create'));
});

// Destinasi > Edit
Breadcrumbs::for('destinasi-edit', function (BreadcrumbTrail $trail, $product) {
    $trail->parent('destinasi');
    $trail->push('Edit ' , route('continent.edit', $product->id));
});