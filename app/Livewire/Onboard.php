<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

use Illuminate\Validation\Rules;


class Onboard extends Component
{
    public $name;
    public $email;
    public $mobile;

    public function register()
    {
        $validated = $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:users,email'],
            'mobile' => ['required', 'string', 'max:125']
        ]);

        User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'mobile' => $validated['mobile'],
        ]);

        session()->flash('status', 'User registered successfully!');
        $this->reset();

        // $this->dispatchBrowserEvent('redirectAfterDelay');
        $this->js(<<<'JS'
            setTimeout(() => {
                window.location.href = "/testimonials";
            }, 3000);
        JS);
    }

    public function render()
    {
        return view('livewire.onboard');
    }

}
