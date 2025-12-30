<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle($request, Closure $next, ...$roles)
    {
        // Nếu chưa đăng nhập → chuyển về trang login
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Bạn phải đăng nhập trước');
        }

        $user = Auth::user();

        // Kiểm tra xem role người dùng có nằm trong danh sách roles yêu cầu không
        if (!in_array($user->role, $roles)) {
            return abort(403, 'Bạn không có quyền truy cập trang này.');
        }

        return $next($request);
    }
}
