<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tasks = [
            [
                'title' => 'Helyszín lefoglalása - Városi Kulturális Központ',
                'description' => 'A márciusi céges rendezvényhez le kell foglalni a Városi Kulturális Központ nagytermét. Egyeztetni kell a helyszín üzemeltetőjével a technikai lehetőségekről.',
                'status' => 'pending',
            ],
            [
                'title' => 'Ügyfél egyeztetés - Nagy Péter esküvője',
                'description' => 'Megbeszélés az esküvő részleteiről: menü, zenei program, dekoráció. Időpont: február 20., 14:00.',
                'status' => 'in_progress',
            ],
            [
                'title' => 'Eszközbeszerzés - hangrendszer bérlése',
                'description' => 'Professzionális hangrendszer és mikrofonok bérlése a következő három rendezvényhez. Árajánlatok bekérése minimum három szolgáltatótól.',
                'status' => 'pending',
            ],
            [
                'title' => 'Számlák rendezése - januári rendezvények',
                'description' => 'A januári rendezvények összes számlájának ellenőrzése és kifizetése. Határidő: február 28.',
                'status' => 'completed',
            ],
            [
                'title' => 'Marketing anyagok - tavaszi esküvői csomag',
                'description' => 'Új marketing anyagok készítése a tavaszi esküvői csomaghoz: brosúra, közösségi média posztok, honlap frissítés.',
                'status' => 'in_progress',
            ],
        ];

        foreach ($tasks as $task) {
            Task::create($task);
        }
    }
}
