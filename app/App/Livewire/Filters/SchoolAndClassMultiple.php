<?php

namespace App\Livewire\Filters;

use Livewire\Component;

class SchoolAndClassMultiple extends Component
{
    public $schoolId;
    public $classId;

    public $classes;
    public $schoolClasses;
    public $classClasses;

    public function mount($classes = "col-12", $schoolClasses = "col-12 my-3", $classClasses = "col-12 my-3")
    {
       $this->schoolId = request()->school_id ?? '';
       if($this->schoolId == 'undefined') $this->schoolId = '';

       if (!empty(request()->class) && is_array(request()->class)) {
           $this->classId = implode(',', request()->class);
       }else{
           $this->classId = request()->class ?? '';
       }

       if($this->classId == 'undefined') $this->classId = '';

       $this->classes = $classes;
       $this->schoolClasses = $schoolClasses;
       $this->classClasses = $classClasses;
    }

    public function render()
    {
        return view('livewire.filters.school-and-class-multiple');
    }

    public function setSchool($id)
    {
        if($this->schoolId == $id) return;
        $this->schoolId = $id;
        $this->classId = '';

        $this->emitSelf('reInitClass', $id);
    }

    public function setClass($id)
    {
        if($this->classId == $id) return;

        if($id == "") {
            $this->classId = "";
            $this->emitSelf('reInitClass', $this->schoolId);
            return;
        }

        $this->classId = $id;
    }
}
