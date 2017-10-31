<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Message_out extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $table = 'messages_outs';

    protected $fillable = [
        'message_id', 'name', 'email', 'title', 'message', 'created_at', 'updated_at'
    ];
}
