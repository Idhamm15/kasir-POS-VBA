<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Auth;

class UserRoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $role): Response
    {
        $user = Auth::user();

        if ($user) {
            if ($user->role == 'GUEST' && $role != 'GUEST') {
                return response()->json(["message" => "You don't have permission to access this page"], 403);
            } else if ($user->role == 'USER' && $role == 'ADMIN') {
                return response()->json(["message" => "You don't have permission to access this page"], 403);
            }
            } else {
                return redirect('/login'); // atau melakukan tindakan lainnya jika pengguna belum masuk
            }

            return $next($request);
    }
}
