<?php
namespace App\Models;
use Mavinoo\Batch\Traits\HasBatch;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class FieldFillable extends Model
{
    protected $table = 'field_fillable';
    protected $fillable = ['display','value','field_id'];
    protected $guarded = ['id'];
    public $timestamps = false;
    use HasBatch;

}
