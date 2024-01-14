<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;

class ShopController extends Controller
{
    private function getPrice(string $min_max = 'min')
    {
        $products = Product::where('visibility_on_website',True)->get();
        $price_min = 10000;
        $price_max = 0;
        foreach ($products as $key => $value) {
            if ($value->price_promo != null) {
                if ($price_max < $value->price_promo) {
                    $price_max = $value->price_promo;
                }
                if ($price_min > $value->price_promo) {
                    $price_min = $value->price_promo;
                }
            } else {
                if ($price_max < $value->price) {
                    $price_max = $value->price;
                }
                if ($price_min > $value->price) {
                    $price_min = $value->price;
                }
            }
        }
        return $min_max == 'min' ? $price_min : $price_max;
    }
    public function index()
    {
        Breadcrumbs::for('index', function ($trail) {
            $trail->push('Strona główna', route('index'));
        });

        Breadcrumbs::for('shop', function ($trail) {
            $trail->push('Sklep', route('shop'));
        });

        $price_min =  $this->getPrice();
        $price_max =  $this->getPrice('max');

        $products = Product::where('visibility_on_website',True)->orderBy('created_at', 'desc')->paginate(20);
        $category = null;
        $r_price_min = null;
        $r_price_max = null;
        return view('shop.index', compact('products', 'category', 'price_min', 'price_max', 'r_price_min', 'r_price_max'));
    }
    public function store(Request $request)
    {

        Breadcrumbs::for('index', function ($trail) {
            $trail->push('Strona główna', route('index'));
        });

        Breadcrumbs::for('shop', function ($trail) {
            $trail->push('Sklep', route('shop'));
        });

        $price_min =  $this->getPrice();
        $price_max =  $this->getPrice('max');

        $products = Product::where('visibility_on_website',True)->orderBy('created_at', 'desc');
        $category = null;
        if ($request->category != null) {
            if (count($request->category) == 1) {
                $products = Product::where('visibility_on_website',True)->where('attr', $request->category[0]);
                $category = $request->category[0];
            } else if(count($request->category) == 2) {
                $products = Product::where('visibility_on_website',True);
                $products = $products->where('attr', $request->category[0])->orWhere('attr', $request->category[1]);
                $category = strval($request->category[0]) . strval($request->category[1]);
            }else {
                $category = 'all';
            }
        }

        $products = $products->paginate(20);
        $products_price = [];
        if ($request->price_min != null) {
            foreach ($products as $key => $value) {
                if ($value->price_promo != null) {
                    if ($request->price_min <= $value->price_promo) {
                        array_push($products_price, $value);
                    }
                } else {
                    if ($request->price_min <= $value->price) {
                        array_push($products_price, $value);
                    }
                }
            }
        }
        $products = $products_price;
        $products_price = [];
        if ($request->price_max != null) {
            foreach ($products as $key => $value) {
                if ($value->price_promo != null) {
                    if ($request->price_max >= $value->price_promo) {
                        array_push($products_price, $value);
                    }
                } else {
                    if ($request->price_max >= $value->price) {
                        array_push($products_price, $value);
                    }
                }
            }
        }
        $products = $products_price;
        $r_price_min = $request->price_min;
        $r_price_max = $request->price_max;
        return view('shop.index', compact('products', 'category', 'price_min', 'price_max', 'r_price_min', 'r_price_max'));
    }
}
