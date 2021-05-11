<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TenantScopeTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    public function a_model_has_a_tenant_id_on_the_migration()
    {
        $now = now();
        $this->artisan('make:model Test -m');

        //find the migration file and check it has a tenant_id on it
        $filename = $now->year . '_' . $now->format('m') . '_' . 
        $now->format('d') . '_' . $now->format('i') . $now->format('s') . 
        '_create_tests_table.php';
        $this->assertTrue(File::exists(database_path('migrations/'.$filename)));
        $this->assertStringContainsString('$table->unsignedBigInteger(\'tenant_id\')->index();',
        File::get(database_path('migrations/'.$filename)));
        
        //clean up
        File::delete(database_path('migrations/'.$filename));
        File::delete(app_path('Test.php'));
    }

    public function a_user_can_only_see_users_in_the_same_tenant()
    {
        $tenant1 = Tenant::factory()->create();
        $tenant2 = Tenant::factory()->create();

        $user1 = Tenant::factory()->create([
            'tenant_id' => $tenant1,

        ]);

        Tenant::factory(),
    }
}
