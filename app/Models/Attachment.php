<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    use HasFactory;

    protected $fillable = [
        'task_id',
        'comment_id',
        'filename',
        'filepath',
        'uploaded_by',
    ];

    public function task()
    {
        return $this->belongsTo(Task::class);
    }

    public function comment()
    {
        return $this->belongsTo(Comment::class);
    }

    public function uploader()
    {
        return $this->belongsTo(User::class, 'uploaded_by');
    }
}
