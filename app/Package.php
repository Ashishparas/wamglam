<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $table = "packages";
    
    
    
    protected $primaryKey = "id";
    
    
    protected $fillable = ['name','price','image','description','features','type','status'];
    
    protected $appends = ['base_url'];
    
    
    public function getBaseUrlAttribute(){
        return asset('package');
    }
    
    
    
}
