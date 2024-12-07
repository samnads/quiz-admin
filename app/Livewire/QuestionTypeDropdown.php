<?php

namespace App\Livewire;

use App\Models\QuestionType;
use Livewire\Attributes\On;
use Livewire\Component;

class QuestionTypeDropdown extends Component
{
    public $question_type_id;
    public $question_types;
    #[On('language_id-updated')]
    public function updateQuestion_type_id()
    {
        $this->question_type_id = null;
    }

    public function updated(){
    }
    public function render()
    {
        $this->question_types = QuestionType::all();
        return view('livewire.question-type-dropdown');
    }
}
