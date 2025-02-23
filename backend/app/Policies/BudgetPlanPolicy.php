<?php

namespace App\Policies;

use App\Models\User;
use App\Models\BudgetPlan;

class BudgetPlanPolicy
{
    public function update(User $user, BudgetPlan $budgetPlan)
    {
        return $user->id === $budgetPlan->user_id;
    }
} 