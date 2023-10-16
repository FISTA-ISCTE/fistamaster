<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workshop extends Model
{
    protected $fillable = [
        'title', 
        'company',
        'atendeeslimit','begin','end' 
       ];


       public function users()
       {
          //return $this->belongsToMany(RelatedModel, pivot_table_name, foreign_key_of_current_model_in_pivot_table, foreign_key_of_other_model_in_pivot_table);
       return $this->belongsToMany(User::class, 'id');
        
       }
       
       public function usersInscritos()
        {
        //return $this->belongsToMany(RelatedModel, pivot_table_name, foreign_key_of_current_model_in_pivot_table, foreign_key_of_other_model_in_pivot_table);
        return $this->belongsToMany(User::class,'workshop-inscricoes');
        
        }
}
