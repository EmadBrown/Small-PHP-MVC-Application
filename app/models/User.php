<?php
 use Illuminate\Database\Eloquent\Model as Eloquent;
 
class User  extends Eloquent
{
    
    public $name;
    
    public  $timesstamps = ['created_at', 'updated_at'];

    protected $fillable = ['username', 'email'];
}
