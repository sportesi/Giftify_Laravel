<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;
use File;
use App\User;
use App\Http\Requests\AvatarStore;

class AvatarController extends Controller
{
  public function showProfile(){
    return view('pagina.perfil', array('user' => Auth::user()));
  }
  public function updateAvatar(AvatarStore $request){

    if($request->hasFile('avatar')){
      $avatar = $request->file('avatar');
      $fileName = time().'.'.$avatar->getClientOriginalExtension();

      $this->deleteOldImahe(Auth::user());
    }
    return view('pagina.profile', array('user'=> Auth::user()));
  }

  protected function deleteOldImage($user){

    if($user->avatar !== 'default.jpg'){

      $file = 'storege/avatars/'.$user->avatar;

      if(File::exists($file)){
        unlink($file);
      }
    }
  }






}
