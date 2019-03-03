<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * Indicates whether the XSRF-TOKEN cookie should be set on the response.
     *
     * @var bool
     */
    protected $addHttpCookie = true;

    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'backend/category/category-exists',
        'backend/category/get-subcategory',
        'backend/category/get-sub_child_category',
        'backend/banner/delete',
        'backend/category/delete',
        'backend/category/forcefully-delete',
        'backend/product/delete-product-image',
        'backend/product/delete'  
    ];
}
