<?php

namespace App\Models;

class Job
{
    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Müdür',
                'kazanc' => '$20,000'
            ],
            [
                'id' => 2,
                'title' => 'Programcı',
                'kazanc' => '$10,000'
            ],
            [
                'id' => 3,
                'title' => 'Muhasebeci',
                'kazanc' => '$8,000'
            ]
        ];
    }

    public static function find(int $id): array
    {
        $job = \Illuminate\Support\Arr::first(Job::all(), fn($job) => $job['id'] == $id);

        if (!$job) {
            abort(404);
        }

        return $job;
    }
}
