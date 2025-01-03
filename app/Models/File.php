<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model {
    use HasFactory;

    protected $fillable = ['original_name', 'stored_name', 'uploaded_at'];
}