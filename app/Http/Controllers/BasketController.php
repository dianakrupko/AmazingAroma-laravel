<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use App\Models\Order;
use App\Models\Photo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BasketController
{
    public function basket()
    {
        $user = Auth::user();
        if (!is_null($user)) {
            $ph = Photo::get();
            $user_id = Auth::user()->id;
            $orders = $user->orders->where('done', 0);
            foreach ($orders as $order)
                $orderId = $order->id;
            if (is_null($orderId)) {
                $order = null;
                return view('basket/basket', ['order' => $order, "photos" => $ph]);
            } else {
                $order = Order::findOrFail($orderId);
            }
        } else {
            $orderId = session('orderId');
            $ph = Photo::get();
            if (is_null($orderId)) {
                $order = null;
                return view('basket/basket', ['order' => $order, "photos" => $ph]);
            }
            $order = Order::findOrFail($orderId);
        }
        return view('basket/basket', ['order' => $order, "photos" => $ph]);
    }

    public function basketAdd($product_id)
    {
        $user = Auth::user();
        if (!is_null($user)) {
            $user_id = Auth::user()->id;
            $orders = $user->orders->where('done', 0);
            foreach ($orders as $order)
                $orderId = $order->id;
            $ph = Photo::get();
            if (is_null($orderId)) {
                $orderId = Order::create()->insert(['user_id' => $user_id]);
                $order = Order::find($orderId);
                $order->products()->attach($product_id);
                return view('basket/basket', ['order' => $order, "photos" => $ph]);
            } else {
                $order = Order::findOrFail($orderId);
                if ($order->products->contains($product_id)) { //чи э уже продукт в корзні
                    $pivotRow = $order->products()->where('product_id', $product_id)->first()->pivot;
                    $pivotRow->count++;
                    $pivotRow->update();
                } else {
                    $order->products()->attach($product_id);
                }
            }
        } else {
            $orderId = session('orderId');
            if (is_null($orderId)) {
                $orderId = Order::create()->id;
                session(['orderId' => $orderId]);
                $order = Order::find($orderId);
                $order->products()->attach($product_id);
            } else {
                $order = Order::find($orderId);
                if ($order->products->contains($product_id)) { //чи э уже продукт в корзні
                    $pivotRow = $order->products()->where('product_id', $product_id)->first()->pivot;
                    $pivotRow->count++;
                    $pivotRow->update();
                } else {
                    $order->products()->attach($product_id);
                }
            }
        }
        return redirect()->route('basket');
    }

    public function basketSub($product_id)
    {
        $user = Auth::user();
        if (!is_null($user)) {
            $user_id = Auth::user()->id;
            $ph = Photo::get();
            $orders = $user->orders->where('done', 0);
            foreach ($orders as $order)
                $orderId = $order->id;
            $order = Order::find($orderId);
            if ($order->products->contains($product_id)) {
                $pivotRow = $order->products()->where('product_id', $product_id)->first()->pivot;
                if ($pivotRow->count < 2) {
                    $order->products()->detach($product_id);
                } else {
                    $pivotRow->count--;
                    $pivotRow->update();
                }
            }
        } else {
            $orderId = session('orderId');
            if (is_null($orderId)) {
                return redirect()->route('basket');
            }
            $order = Order::find($orderId);
            if ($order->products->contains($product_id)) {
                $pivotRow = $order->products()->where('product_id', $product_id)->first()->pivot;
                if ($pivotRow->count < 2) {
                    $order->products()->detach($product_id);
                } else {
                    $pivotRow->count--;
                    $pivotRow->update();
                }
            }
        }
        return redirect()->route('basket');
    }

    public function basketRemove($product_id)
    {
        $user = Auth::user();
        if (!is_null($user)) {
            $user_id = Auth::user()->id;
            $ph = Photo::get();
            $orders = $user->orders->where('done', 0);
            foreach ($orders as $order)
                $orderId = $order->id;
            $order = Order::find($orderId);
            $order->products()->detach($product_id);
        } else {
            $orderId = session('orderId');
            if (is_null($orderId)) {
                return redirect()->route('basket');
            }
            $order = Order::find($orderId);
            $order->products()->detach($product_id);
        }
        return redirect()->route('basket');
    }

    public function orderDone($id)
    {
        $order = Order::find($id);
        return view('basket/order_done', ['order' => $order]);
    }


    public function check_order(Request $request, $id)
    {
        $valid = $request->validate([
            'name' => '',
            'phone' => 'required|size:10',
            'delivery' => ''
        ]);
        $ph = Photo::get();
        $order = Order::find($id);
        $order->done++;
        $order->update();
        $user = Auth::user();
        if (!is_null($user)) {
            $user_id = Auth::user()->id;
            $orderId = Order::create()->insert(['user_id' => $user_id]);
        }
        return view('basket/order_done', ['request' => $request, 'order' => $order, 'photos' => $ph]);
    }

    public function orderDetail($id)
    {
        $o = Order::find($id);
        $R = $o->products;
        $ph = Photo::get();
        return view('basket/orderDetail', ["order" => $o, 'products' => $R, 'photos' => $ph]);
    }

    public function myOrders($id)
    {
        $u = User::find($id);
        $R = $u->orders;
        return view('orders', ['user' => $u, 'orders' => $R]);
    }
}
