<?php

namespace App\Models;

use App\Observers\TeamObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Model;

#[ObservedBy(TeamObserver::class)]
class Team extends Model
{
    protected function casts(): array
    {
        return [
            'uuid' => 'string',
            'name' => 'string',
            'year' => 'string',
        ];
    }
}
