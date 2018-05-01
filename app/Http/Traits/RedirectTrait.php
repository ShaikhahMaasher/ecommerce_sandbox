<?php

namespace App\Http\Traits; 

use Illuminate\Http\Request;   

trait RedirectTrait
{
    /**
     * Where to redirect users after register/login/reset based in roles.
     *
     * @param \Iluminate\Http\Request  $request
     * @param mixed $user
     * @return mixed
     */
    public function RedirectBasedOnRole(Request $request, $user) {
        
        $route = '';
        
        switch ($user->role->title) {
            # Admin
            case 'administrator':
              $route = '/admin/home';  // the admin's route
            break;
                
            # User
            case 'customer':
               $route = '/home';   // the user's route
              break;
        
              default: break;
        }        
        return redirect()->intended($route);
    }
}