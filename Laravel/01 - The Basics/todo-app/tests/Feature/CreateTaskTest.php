<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CreateTaskTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    use RefreshDatabase;

    public function test_create_task()
    {
        $user = new User();
        $user->name = 'Sverker';
        $user->email = 'sverker@yrgo.se';
        $user->password = Hash::make('123');
        $user->save();

        $this
            ->actingAs($user)
            ->post('task', [
                'description' => 'Finish writing this test'
            ]);

        $this->assertDatabaseHas('tasks', ['description' => 'Finish writing this test']);
    }

    public function test_complete_task()
    {
        $user = new User();
        $user->name = 'Sverker';
        $user->email = 'sverker@yrgo.se';
        $user->password = Hash::make('123');
        $user->save();

        $this
            ->actingAs($user)
            ->post('task', [
                'description' => 'Finish writing this test'
            ]);

        $this->assertDatabaseHas('tasks', ['description' => 'Finish writing this test']);

        $task = $user->tasks()->first();

        $this
            ->actingAs($user)
            ->patch('tasks/' . $task->id . '/complete');

        $this->assertDatabaseHas('tasks', ['description' => 'Finish writing this test', 'completed' => true]);
    }
}
