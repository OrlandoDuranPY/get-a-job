<?php

namespace App\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Hash;
use App\Livewire\Forms\Auth\LoginForm;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public LoginForm $form;

    public function login()
    {
        $this->validate();

        if ($this->validate()) {
            // Buscar que el correo exista
            $user = User::where('email', $this->form->email)->first();

            if (!$user) {
                $this->addError('form.email', 'El correo que ingresaste no está registrado');
                return;
            } else {
                // Verificar que la contraseña sea correcta
                if (!Hash::check($this->form->password, $user->password)) {
                    $this->addError('form.password', 'La contraseña que ingresaste es incorrecta');
                    return;
                } else {
                    // Iniciar sesion
                    Auth::login($user);
                    return redirect()->route('home');
                }
            }
        }
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
