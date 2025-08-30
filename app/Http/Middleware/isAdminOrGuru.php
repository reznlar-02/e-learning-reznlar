<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdminOrGuru
{

    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();

        if ($user === null) {
            return redirect()->route('login');
        }

        // Check Spatie roles (case-insensitive)
        $hasSpatieAdminRole = false;
        if (method_exists($user, 'hasRole')) {
            $hasSpatieAdminRole = $user->hasRole('Admin') || $user->hasRole('admin') || $user->hasRole('ADMIN') || $user->hasRole('Guru');
        }
        
        // Check column role (case-insensitive)
        $hasColumnAdminRole = false;
        if (property_exists($user, 'role')) {
            $userRole = strtolower((string) ($user->role ?? ''));
            $hasColumnAdminRole = in_array($userRole, ['admin', 'super admin', 'guru']);
        }

        if (! $hasSpatieAdminRole && ! $hasColumnAdminRole) {
            abort(403, 'Unauthorized action. This page requires Admin or Guru role. User role: ' . ($user->role ?? 'None') . ', Spatie roles: ' . $user->getRoleNames()->implode(', '));
        }

        return $next($request);
    }
}
