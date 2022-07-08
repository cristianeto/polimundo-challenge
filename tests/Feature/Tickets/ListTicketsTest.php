<?php

namespace Tests\Feature\Tickets;

use Tests\TestCase;
use App\Models\User;
use App\Models\Ticket;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ListTicketsTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    public function fetch_all_tickets()
    {
        //Arrange
        $user = User::factory()->create();
        Ticket::factory()->times(4)->create(["user_id" => $user->id]);
        //Act
        $this->getJson(route("tickets.index"))
        //Assert
            ->assertJsonCount(4)
            ->assertStatus(200);
    }
}
