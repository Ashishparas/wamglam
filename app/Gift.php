<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gift extends Model
{
    protected $table = "gifts";
    
    
    
    
    protected $primaryKey = "id";
    
    
    
    protected $fillable = ['name','image','price','status'];
    
    protected $appends = ['base_url'];
    
    
    public function getBaseUrlAttribute(){
        return asset('/package');
    }
    
    
}
