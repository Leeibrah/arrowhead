<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

class Testimonials extends Component
{
    public function render()
    {
    	$submitted = 'Form Submitted';

    	$title = 'Testimonials';
        $company_name = app_name();
        $app_email = setting('email');

        return view('livewire.testimonials', compact('submitted', 'title', 'company_name', 'app_email'));
    }
}
