<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    // Menampilkan form feedback dan feedback yang ada di session
    public function index()
    {
        // Mengambil feedback dari session (jika ada)
        $feedbacks = session('feedbacks', []);
        
        // Menampilkan form feedback dan feedback yang ada di session
        return view('feedback', compact('feedbacks'));
    }

    // Menyimpan feedback sementara di session
    public function store(Request $request)
    {
        // Validasi input feedback
        $request->validate([
            'feedback' => 'required|string|max:255',
        ]);

        // Mendapatkan feedback dari inputan
        $feedback = $request->input('feedback');

        // Menyimpan feedback di session
        $feedbacks = session('feedbacks', []); // Ambil feedback yang sudah ada
        $feedbacks[] = $feedback; // Tambahkan feedback baru
        session(['feedbacks' => $feedbacks]); // Simpan kembali ke session

        // Redirect kembali ke halaman feedback setelah menyimpan
        return redirect()->route('feedback');
    }
}