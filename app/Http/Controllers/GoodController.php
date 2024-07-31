<?php

namespace App\Http\Controllers;

use App\Http\Resources\GoodResource;
use App\Models\Good;
use Illuminate\Http\Request;

class GoodController extends Controller
{
    public function index(Request $request){
        $goods = Good::orderBy('name');
        if($request->category){
            $goods = $goods->where('category_id','=',$request->category);
        }
        if($request->stock){
            $stockId = $request->stock;
            $goods = $goods->whereHas('stocks', function($query) use ($stockId) {
                $query->where('stock_id', $stockId);
            });
        }
        if($request->price_from && $request->price_to)
        {
            $price_from = intval($request->price_from);
            $price_to = intval($request->price_to);
            $goods = $goods->whereRaw('JSON_UNQUOTE(JSON_EXTRACT(prices, "$.price")) >= ?', [$price_from])
                ->whereRaw('JSON_UNQUOTE(JSON_EXTRACT(prices, "$.price")) <= ?', [$price_to]);
        }
        $goods = $goods->paginate(14);
        return GoodResource::collection($goods);
    }

    public function show(Good $good){
        return GoodResource::make($good);
    }

}
