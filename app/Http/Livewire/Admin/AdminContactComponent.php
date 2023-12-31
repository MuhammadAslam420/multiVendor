<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Contact;
use Livewire\WithPagination;


class AdminContactComponent extends Component
{
    use WithPagination;

    public function render()
    {
        $contacts=Contact::orderBy('created_at','desc')->paginate(12);
        return view('livewire.admin.admin-contact-component',['contacts'=>$contacts])->layout('layouts.admin.base');
    }
}
