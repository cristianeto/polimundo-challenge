<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ListPersonsTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function fetch_all_persons()
    {
        User::factory()->times(5)->create();
        $this->getJson(route("persons.index"))
            ->assertJsonCount(5);
    }

    /** @test */
    public function fetch_person_by_id()
    {
        $persons = User::factory()->times(5)->create();

        $response = $this->getJson(route("persons.show", $persons[0]->id));

        $response->assertJsonFragment([
            'name' => $persons[0]->name,
            'email' => $persons[0]->email,
        ])->assertStatus(200);
    }
}
