<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ExercisesBasic extends Component
{

    public $basicExercises;
    public $daysWeek;
    public $gender;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($basicExercises = null, $daysWeek = null, $gender = null)
    {
        if($basicExercises != null) {
            $this->basicExercises = $basicExercises;
        }

        if($daysWeek != null) {
            $this->daysWeek = $daysWeek;
        }

        if($gender != null) {
            $this->gender = $gender;
        }
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.exercises-basic');
    }
}
