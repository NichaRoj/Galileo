<?php

namespace App;

use Moloquent;

class Student extends Moloquent{
    protected $collection = 'students';
    protected $guarded = [];
}
