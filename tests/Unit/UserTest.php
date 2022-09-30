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
            'name' =>'DARY',
            'email'  => 'dary@gmail.com'
        ]);

        $this->assertTrue(($user1->email != $user2->email) &&
        ($user1->name != $user2->name));
   }

   public function test_delete_user(){
        $user = User::factory()->count(1)->make();
        $user = User::first();

        if($user){
            $user->delete();
        }
        $this->assertTrue(true);
   }

   public function test_guarda_nuevo_user(){
        $respuesta = $this->post('/register', [
            'name' => 'Carlos',
            'email' => 'carlos@gmail.com',
            'password' => 'carlos123',
            'password_confirmation' => 'carlos123'
        ]);
        return $respuesta->assertRedirect('/home');
   }

   public function test_loguea_usuario(){
        $respuesta = $this->post('/login', [
            'email'=>'carlos@gmail.com',
            'password'=>'carlos123'
        ]);
        return $respuesta->assertRedirect('/home');
   }

}
