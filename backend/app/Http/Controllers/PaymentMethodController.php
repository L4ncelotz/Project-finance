<?php

namespace App\Http\Controllers;

use App\Http\Requests\PaymentMethodRequest;
use App\Models\PaymentMethod;
use Illuminate\Http\Request;

class PaymentMethodController extends Controller
{
    public function index()
    {
        return PaymentMethod::all();
    }

    public function store(PaymentMethodRequest $request)
    {
        $paymentMethod = PaymentMethod::create($request->validated());
        return response()->json($paymentMethod, 201);
    }

    public function show($id)
    {
        return PaymentMethod::findOrFail($id);
    }

    public function update(PaymentMethodRequest $request, $id)
    {
        $paymentMethod = PaymentMethod::findOrFail($id);
        $paymentMethod->update($request->validated());
        return response()->json($paymentMethod, 200);
    }

    public function destroy($id)
    {
        $paymentMethod = PaymentMethod::findOrFail($id);
        $paymentMethod->delete();
        return response()->json(null, 204);
    }
} 