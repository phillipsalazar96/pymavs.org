<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Event extends Model
{
          //table
          protected $table = 'events';
          // Primary Key
          public $primaryKey = 'id';
          // Timestamps
          public $timestamps = true;
}
