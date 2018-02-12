<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;
use Auth;

class IsAdmin{

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	 public function handle($request, Closure $next)
	 {
		 if (Auth::user()) {
				return $next($request);
		 }

	      // if(session('level') == 0 || session('level') == 1 || session('level') == 2)
	      // {
	      //   return $next($request);
	      // }

		 return redirect('/panel');
	 }
}
