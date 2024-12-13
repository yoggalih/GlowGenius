<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        $feedbacks = Feedback::all();
        return view('feedback', compact('feedbacks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'feedback' => 'required|string',
        ]);

        Feedback::create([
            'content' => $request->feedback,
        ]);

        return redirect()->route('feedback');
    }

    public function results()
    {
        $feedbacks = Feedback::all();
        return view('feedback.results', compact('feedbacks'));
    }
}
