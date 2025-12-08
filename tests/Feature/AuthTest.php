<?php

namespace Tests\Feature;

use Domain\User\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function canLoginByEmail()
    {
        $user = factory(User::class)->create();

        $this->actingAs($user)
            ->post(route('login'), [
                'username' => $user->email,
                'password' => 'password'
            ])->assertRedirect(route('dashboard'));
    }

    /** @test */
    public function canLoginByPhone()
    {
        $user = factory(User::class)->create();

        $this->actingAs($user)
            ->post(route('login'), [
                'username' => $user->phone,
                'password' => 'password'
            ])->assertRedirect(route('dashboard'));
    }

    /** @test */
    public function guestCanViewRegisterPage()
    {
        $this->get(route('register'))
            ->assertStatus(200);
    }

    /** @test */
    public function canRegister()
    {
        $user = factory(User::class)->make([
            'email' => 'new-user@example.com',
        ]);

        $payload = [
            'first_name' => $user->first_name,
            'last_name' => $user->last_name,
            'middle_name' => $user->middle_name,
            'email' => $user->email,
            'password' => 'password123',
            'password_confirmation' => 'password123',
            'pd_agree' => true,
        ];

        $response = $this->post(route('register'), $payload);
        $response->assertRedirect(route('dashboard'));
        $this->assertDatabaseHas('users', ['email' => $user->email]);
    }

    /** @test */
    public function canResetPassword()
    {
        $user = factory(User::class)->create([
            'phone' => '+79214177940',
        ]);

        $response = $this->post(route('password.phone'), [
            'phone' => $user->phone,
        ]);

        $response->assertSessionHas('resetPasswordUser');

        $resetPasswordUser = session()->get('resetPasswordUser');
        $data = [
            'code' => '890D',
            'password' => 'pass123321',
            'password_confirmation' => 'pass123321',
        ];

        $response = $this->post(route('password.reset'), $data);
        $response->assertSessionHasErrors('code');

        $data['code'] = $resetPasswordUser->getCode();
        $response = $this->post(route('password.reset'), $data);
        $response->assertRedirect(route('dashboard'));
        $this->assertDatabaseHas('users', ['phone' => $user['phone']]);
    }
}
