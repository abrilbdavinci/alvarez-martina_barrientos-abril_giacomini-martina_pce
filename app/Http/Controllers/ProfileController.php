<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function view(User $user)
    {
        return view('profile.index', compact('user'));
    }

    // Mostrar formulario de edición
    public function edit(User $user)
    {
        return view('profile.edit', compact('user'));
    }

        // Actualizar perfil
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required|string|max:30',
            'email' => 'required|email|max:255|unique:users,email,' . $user->id,
        ]);

        $data = $request->only(['name', 'email']);
        if ($request->hasFile('image')) {
            if ($user->image && \Storage::disk('public')->exists($user->image)) {
                \Storage::disk('public')->delete($user->image);
            }
            $imagePath = $request->file('image')->store('users', 'public');
            $data['image'] = $imagePath;
        }
        $user->update($data);

        return redirect()->route('profile.index', $user)->with('feedback.message', 'Perfil actualizado correctamente.');
    }
}
