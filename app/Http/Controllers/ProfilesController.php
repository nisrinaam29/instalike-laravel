<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProfilesController extends Controller
{
    public function index(User $user)
    {
        return view('profiles.index', compact('user'));
    }

    public function edit(User $user)
    {
        $this->authorize('update', $user->profile);
        return view('profiles.edit', compact('user'));
    }
    public function update(User $user)
{   $this->authorize('update', $user->profile);
    $data = request()->validate([
        'title' => 'required',
        'description' => 'required',
        'url' => 'url',
        'image' => '', // You can add specific validation rules for the image if needed.
    ]);
    $imagePath = null;
    if (request('image')) {
        $imagePath = request('image')->store('profile', 'public');
        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200,1200);
        $image->save();
        $imageArray = ['image'=> $imagePath];
    }


    auth()->user()->profile->update(array_merge(
        $data,
        $imageArray ?? []
    ));

    return redirect("/profile/{$user->id}");
}

}
