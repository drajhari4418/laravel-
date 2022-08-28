<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title','body','slug'
    ];
    
   public function user()
   {
    return $this->belongsTo(User::class);
   }

   public  function getUrlAttributes()
   {
    return route("questions.show",$this->id);
   }

   public function getCreatedDateAttribute()
   {
    return $this->created_at->diffForHumans();
   }
}
