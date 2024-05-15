<?php

declare(strict_types=1);

namespace App\Controllers;

class ProductController extends BaseController
{
    public function show()
    {
        $this->view('product', [
            'productId'=>$this->request->get('productid')
        ]);
    }
}