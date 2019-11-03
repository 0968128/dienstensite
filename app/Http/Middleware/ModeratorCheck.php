<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class ModeratorCheck {
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    public function handle($request, Closure $next) {
        $userRoles = Auth::user()->roles->pluck('name');
        if(!$userRoles->contains('moderator')) {
            return redirect('/');
        }
        return $next($request);
    }
}