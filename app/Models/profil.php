<?php

namespace App\Models;
// namespace Conner\Tagging;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class profil extends Model
{
    use HasFactory;
    use \Conner\Tagging\Taggable;

    protected $table = 'profil';
    protected $guarded = ['id'];
}
