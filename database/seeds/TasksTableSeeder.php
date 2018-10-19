<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
  /**
  * Run the database seeds.
  *
  * @return void
  */
  public function run()
  {
    DB::table('tasks')->insert([
      'title' => 'task1',
      'contents' => 'docker勉強',
      'status' => '完了',
    ]);

    DB::table('tasks')->insert([
      'title' => 'task2',
      'contents' => 'AWS勉強',
      'status' => null,
    ]);

    DB::table('tasks')->insert([
      'title' => 'task3',
      'contents' => null,
      'status' => null,
    ]);
  }
}
