<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Order;
use App\Models\Admin;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return response()->json($cars);
    }

    public function show($id)
    {
        $car = Car::findOrFail($id);
        return response()->json($car);
    }

    public function store(Request $request)
    {
        $car = Car::create($request->all());
        return response()->json($car);
    }

    public function update(Request $request, $id)
    {
        $car = Car::findOrFail($id);
        $car->update($request->all());
        return response()->json($car);
    }

    public function delete($id)
    {
        $car = Car::findOrFail($id);
        $car->delete();
        return response()->json(null, 204);
    }
}

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return response()->json($orders);
    }

    public function show($id)
    {
        $order = Order::findOrFail($id);
        return response()->json($order);
    }

    public function store(Request $request)
    {
        $order = Order::create($request->all());
        return response()->json($order);
    }

    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);
        $order->update($request->all());
        return response()->json($order);
    }

    public function delete($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();
        return response()->json(null, 204);
    }
}

class AdminController extends Controller
{
    public function index()
    {
        $admins = Admin::all();
        return response()->json($admins);
    }

    public function show($id)
    {
        $admin = Admin::findOrFail($id);
        return response()->json($admin);
    }

    public function store(Request $request)
    {
        $admin = Admin::create($request->all());
        return response()->json($admin);
    }

    public function update(Request $request, $id)
    {
        $admin = Admin::findOrFail($id);
        $admin->update($request->all());
        return response()->json($admin);
    }

    public function delete($id)
    {
        $admin = Admin::findOrFail($id);
        $admin->delete();
        return response()->json(null, 204);
    }
}