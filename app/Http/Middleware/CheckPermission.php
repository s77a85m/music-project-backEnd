<?php

namespace App\Http\Middleware;

use App\Models\Admin\Permission;
use Closure;
use Illuminate\Http\Request;

class CheckPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $parameter)
    {
        $permission=Permission::query()->where('title', $parameter)->firstOrFail();
        if(!auth()->user()->roles[0]->hasPermission($permission)){
            return redirect(route('home'))->withErrors(['permission'=>'شما دسترسي نداريد!']);
        }
        return $next($request);
    }
}
