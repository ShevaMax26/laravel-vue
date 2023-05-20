<?php

namespace App\Http\Controllers;

class PersonController extends Controller
{
    public function __invoke()
    {
        $persons = [
            [
                'name' => 'Maxym',
                'age' => 19,
                'job' => 'Boss',
            ],
            [
                'name' => 'Vitaliy',
                'age' => 28,
                'job' => 'Developer',
            ],
            [
                'name' => 'Olga',
                'age' => 24,
                'job' => 'Designer',
            ],
        ];
        return $persons;
    }
}
