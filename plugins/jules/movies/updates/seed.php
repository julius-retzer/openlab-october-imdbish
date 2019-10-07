<?php

namespace Jules\Movies\Updates;

use Seeder;
use Jules\Movies\Models\Movie;

class SeedUsersTable extends Seeder
{
  public function run()
  {
    Movie::create([
      'name' => 'Pulp Fiction',
      'director' => 'Quentin Tarantino',
      'year' => 1994,
      'genre' => 'Crime',
    ]);

    Movie::create([
      'name' => 'Django Unchained',
      'director' => 'Quentin Tarantino',
      'year' => 2012,
      'genre' => 'Western',
    ]);

    Movie::create([
      'name' => 'The Dark Knight',
      'director' => 'Christopher Nolan',
      'year' => 2008,
      'genre' => 'Action',
    ]);

    Movie::create([
      'name' => 'Joker',
      'director' => 'Todd Philips',
      'year' => 2019,
      'genre' => 'Drama',
    ]);
  }
}
