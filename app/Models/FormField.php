<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormField extends Model
{
    use HasFactory;
 
    protected $table = 'form_field';
    protected $fillable = ['notices','field_id','form_id'];
    protected $guarded = ['id'];
}
