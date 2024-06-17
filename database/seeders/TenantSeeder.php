<?php

namespace Database\Seeders;

use App\Models\Tenant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tenant = Tenant::create([
            'plan'              =>  'free',
            'name'              =>  "Tenant 1",
        ]);

        $tenant->domains()->create([
            'domain'    =>  'tenant-1.kistawi.test'
        ]);

    }
}
