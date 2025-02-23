<?php

namespace App\Http\Controllers;

use App\Http\Requests\BudgetPlanRequest;
use App\Models\BudgetPlan;
use Illuminate\Http\Request;

class BudgetPlanController extends Controller
{
    public function index()
    {
        return BudgetPlan::all();
    }

    public function store(BudgetPlanRequest $request)
    {
        $budgetPlan = BudgetPlan::create($request->validated());
        return response()->json($budgetPlan, 201);
    }

    public function show($id)
    {
        return BudgetPlan::findOrFail($id);
    }

    public function update(BudgetPlanRequest $request, $id)
    {
        $budgetPlan = BudgetPlan::findOrFail($id);
        $budgetPlan->update($request->validated());
        return response()->json($budgetPlan, 200);
    }

    public function destroy($id)
    {
        $budgetPlan = BudgetPlan::findOrFail($id);
        $budgetPlan->delete();
        return response()->json(null, 204);
    }
} 