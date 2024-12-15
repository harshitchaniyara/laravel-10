<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['code', 'name', 'category', 'size', 'price', 'description','deleted_at'];

    public function delete()
    {
        $this->deleted_at = Carbon::now('Asia/Kolkata');
        $this->save();
    }
}
