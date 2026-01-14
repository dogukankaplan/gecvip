<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Admin login page
     */
    public function loginForm()
    {
        if (session('admin_logged_in')) {
            return redirect()->route('admin.dashboard');
        }
        return view('admin.login');
    }

    /**
     * Admin login process
     */
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Simple hardcoded admin credentials
        if ($request->username === 'admin' && $request->password === 'gec2024') {
            session(['admin_logged_in' => true]);
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors(['login' => 'Geçersiz kullanıcı adı veya şifre']);
    }

    /**
     * Admin logout
     */
    public function logout()
    {
        session()->forget('admin_logged_in');
        return redirect()->route('admin.login');
    }

    /**
     * Admin dashboard
     */
    public function dashboard()
    {
        $unreadCount = ContactMessage::where('is_read', false)->count();
        $totalCount = ContactMessage::count();
        $recentMessages = ContactMessage::latest()->take(5)->get();

        return view('admin.dashboard', compact('unreadCount', 'totalCount', 'recentMessages'));
    }

    /**
     * List all messages
     */
    public function messages()
    {
        $messages = ContactMessage::latest()->paginate(15);
        return view('admin.messages', compact('messages'));
    }

    /**
     * View single message
     */
    public function showMessage($id)
    {
        $message = ContactMessage::findOrFail($id);

        // Mark as read
        if (!$message->is_read) {
            $message->update(['is_read' => true]);
        }

        return view('admin.message-detail', compact('message'));
    }

    /**
     * Delete message
     */
    public function deleteMessage($id)
    {
        ContactMessage::findOrFail($id)->delete();
        return redirect()->route('admin.messages')->with('success', 'Mesaj silindi');
    }
}
