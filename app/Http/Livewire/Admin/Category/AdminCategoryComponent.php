<?php

namespace App\Http\Livewire\Admin\Category;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;
use carbon\Carbon;
use Livewire\WithFileUploads;

class AdminCategoryComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $logo;

    public function generateslug()
    {
        $this->slug =Str::slug($this->name);
    }

    public function storeCategory()
    {

         $category=new Category();
         $category->name=$this->name;
         $category->slug=$this->slug;
         $imagename=Carbon::now()->timestamp.'.'.$this->logo->extension();
         $this->logo->storeAs('assets/images',$imagename);
         $category->logo=$imagename;
         $category->save();
         return redirect()->route('admin.categories')->with('message','Category is added right now by you successfully!');
         //session()->flash('message','Category is added right now by you successfully!');

    }

    public function render()
    {
        return view('livewire.admin.category.admin-category-component')->layout('layouts.admin.base');
    }
}
