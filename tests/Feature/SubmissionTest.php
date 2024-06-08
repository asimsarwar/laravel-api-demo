<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class SubmissionTest extends TestCase
{
    use RefreshDatabase;

    public function testSubmission()
    {
        $response = $this->postJson('/api/submit', [
            'name' => 'John Doe',
            'email' => 'john.doe@example.com',
            'message' => 'This is a test message.',
        ]);

        $response->assertStatus(202);
    }
}
