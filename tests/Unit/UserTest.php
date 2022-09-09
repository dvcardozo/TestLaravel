<?php

namespace Tests\Unit;

use App\Models\User;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
   public function test_login_form(){
        $response = $this->get('/login');
        $response->assertStatus(500);
   }

   public function test_user_duplication(){
        $user1 = User::make([
            'name' =>'Jhon Doe',
            'email'  => 'jhondoe@gmail.com'
        ]);
        $user2 = User::make([
            'name' =>'dary ',
            'email'  => 'dary@gmail.com'
        ]);

        $this->assertTrue($user1->name != $user2->name);
   }

}
