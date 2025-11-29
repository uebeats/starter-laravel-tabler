<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Payment;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $properties = Property::where('user_id', $user->id)->count();
        $pending = Payment::where('user_id', $user->id)->where('status', 'pending')->count();

        return view('dashboard.admin.dashboard', compact('properties', 'pending'));
    }
}