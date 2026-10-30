 <?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GetAllUserDetailsTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_get_all_users_details()
    {
        $response = $this->getJson('/api/get-all-users');
        $response->assertStatus(200);
    }
}
