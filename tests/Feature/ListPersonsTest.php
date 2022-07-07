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
}
