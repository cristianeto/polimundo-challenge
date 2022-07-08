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

    /** @test */
    public function fetch_a_ticket_by_id()
    {
        //Arrange
        $user = User::factory()->create();
        $tickets = Ticket::factory()->times(4)->create(["user_id" => $user->id]);
        //Act
        $this->getJson(route("tickets.show", $tickets[0]->id))
        //Assert
            ->assertJsonFragment([
                "id" => $tickets[0]->id,
                "origin_city" => $tickets[0]->origin_city,
            ])
            ->assertStatus(200);
    }
}
