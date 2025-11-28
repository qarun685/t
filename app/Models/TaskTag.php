<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class TaskTag extends Pivot
{
    use HasFactory;

    protected $table = 'task_tag';

    protected $fillable = [
        'task_id',
        'tag_id',
    ];
}
