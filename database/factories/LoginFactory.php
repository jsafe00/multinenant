<?php

namespace database\factories;

use App\Models\Login;
use App\Models\Tenant;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
class LoginFactory extends Factory
{
    protected $model = Login::class;

    public function definition()
    {
        $randomDateTime = $this->faker->dateTimeBetween('-6 hours', 'now');
        return [
            'user_id' => User::factory(),
            'tenant_id' => Tenant::factory(),
            'created_at' => $randomDateTime,
            'updated_at' => $randomDateTime,
        ];
    }
}
