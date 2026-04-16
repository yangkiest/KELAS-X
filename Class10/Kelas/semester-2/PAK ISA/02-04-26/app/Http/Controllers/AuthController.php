<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6',
            ]);

            $user = User::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password']),
            ]);

            $token = $user->createToken('API Token')->plainTextToken;

            return response()->json(['user' => $user, 'token' => $token], 201);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json(['errors' => $e->errors()], 422);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function login(Request $request)
    {
        try {
            \Log::info('Raw request data', [
                'method' => $request->getMethod(),
                'content_type' => $request->header('Content-Type'),
                'body' => $request->getContent(),
                'all_input' => $request->all(),
            ]);
            
            \Log::info('Login attempt', ['email' => $request->input('email')]);
            
            $validated = $request->validate([
                'email' => 'required|string|email',
                'password' => 'required|string',
            ]);

            \Log::info('Validation passed', $validated);

            $user = User::where('email', $validated['email'])->first();

            \Log::info('User found', ['user' => $user ? $user->id : 'not found']);

            if (!$user || !\Illuminate\Support\Facades\Hash::check($validated['password'], $user->password)) {
                \Log::warning('Invalid credentials', ['email' => $validated['email']]);
                return response()->json(['message' => 'Invalid credentials'], 401);
            }

            $token = $user->createToken('API Token')->plainTextToken;

            \Log::info('Token created', ['user_id' => $user->id]);

            return response()->json(['user' => $user, 'token' => $token]);
        } catch (\Exception $e) {
            \Log::error('Login error', ['error' => $e->getMessage(), 'trace' => $e->getTraceAsString()]);
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json(['message' => 'Logged out']);
    }
}
