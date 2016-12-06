<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth, Storage;
use App\User;
use App\Http\Requests\AvatarStore;
use \Input as Input;

class AvatarController extends Controller
{
  public function showProfile(){
    return view('paginas.perfil', array('user' => Auth::user()));
  }
  public function updateAvatar(AvatarStore $request){


    // $this->removeAvatarIfExists(Auth::user());
      // $newFilename = uniqid().".".$request->avatar->extension();

      $folder = "avatars";

      $path = $request->file("avatar")->store($folder , 'public');
      $img = Auth::User()->update(['avatar'=> $path]);

    return redirect("/perfil");
  }

    protected function removeAvatarIfExists($user) {
    	if($user->avatar) {

    		Storage::disk('public')->delete($user->avatar);
    	}
    }
}
