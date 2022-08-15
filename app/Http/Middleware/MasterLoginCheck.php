<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class MasterLoginCheck
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
       
        if($request->session()->has('MasterData') == true){
            return $next($request);
        }else{
            $request->session()->flash('masterlogin','Please Login');
            return redirect('/Master');
        }
    }
}
