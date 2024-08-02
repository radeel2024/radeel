<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckIp
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->session()->has('login_alert_shown')) {
            return $next($request);
        }

        $request->session()->put('login_alert_shown', true);

        $username = 'admin'; // Replace with your username logic
        $password = 'password'; // Replace with your password logic

        echo "
            <script>
              alert(hello);
            </script>
        ";

        exit;
       // return $next($request);
    }
}
