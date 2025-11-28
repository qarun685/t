<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class ProjectUser extends Pivot
{
    use HasFactory;

    protected $table = 'projects_users';

    protected $fillable = [
        'project_id',
        'user_id',
    ];
}
