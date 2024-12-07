<?php

namespace App\Livewire;

use App\Models\Language;
use Livewire\Attributes\Computed;
use Livewire\Component;

class LanguageDropdown extends Component
{
    public $language_id;
    public $languages;

    public function updated(){
        $this->dispatch('language_id-updated'); 
    }
    public function render()
    {
        $this->languages = Language::all();
        return view('livewire.language-dropdown');
    }
}
