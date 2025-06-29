<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UsersAdmin extends Component
{
    use WithPagination;

    public $searchTerm;

    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';
        $users = User::where('name', 'like', $searchTerm)->orWhere('email', 'like', $searchTerm)->orderBy('id', 'desc')->with(['permissions', 'roles', 'providers'])->paginate();

        return view('livewire.users-admin', compact('users'));
    }
}


// <?php

// namespace App\Livewire;

// use Livewire\Component;

// class UsersAdmin extends Component
// {
//     public function render()
//     {
//         return view('livewire.users-admin');
//     }
// }