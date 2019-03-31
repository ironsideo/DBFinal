<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;


class isNumericTest extends TestCase
{
    public function testFailure()
    {
        $user = User::inRandomOrder()->first();
        $this->assertIsNumeric($user->id);
    }
}