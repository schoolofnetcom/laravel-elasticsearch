<?php

use Elasticsearch\Client;
use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class ClientTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        /** @var Client $client */
        $client = app(Client::class);
        $start = microtime(true);
        foreach (range(1, 100000) as $value) {
            $client->create([
                'index' => env('ES_INDEX'),
                'type' => 'clients',
                'body' => [
                    'name' => $faker->firstName . ' ' . $faker->lastName,
                    'cpf' => rand(100, 999) . '.' . rand(100, 999) . '.' . rand(100, 999) . '-' . rand(10, 99)
                ]
            ]);
        }
        $end = microtime(true);
        $time = $end - $start;
        $this->command->info("Execucao em: $time segundos");
    }
}
