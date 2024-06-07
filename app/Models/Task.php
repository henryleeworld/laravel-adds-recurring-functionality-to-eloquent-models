<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use MohammedManssour\LaravelRecurringModels\Contracts\Repeatable as RepeatableContract;
use MohammedManssour\LaravelRecurringModels\Concerns\Repeatable;
use MohammedManssour\LaravelRecurringModels\Enums\RepetitionType;

class Task extends Model implements RepeatableContract
{
    use HasFactory, Repeatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
    ];

    public $timestamps = false;

    /**
     * define the base date that we would use to calculate repetition start_at
     */
    public function repetitionBaseDate(?RepetitionType $type = null): Carbon
    {
        return now();
    }
}
