<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    protected static function boot(){
        parent::boot();
        static::created(function ($user){
            $user->profile()->create([
                'fullname' => 'Juan Dela Cruz',
                'position' => 'Laravel Developer',
                'education' => 'AMA Computer University',
                'location' => 'Pangasinan',
                'skills' => 'Laravel, Vue.JS, Bootstrap, Tailwind, Restful API',
                'notes' => 'Jeremiah 29:11',
                'image' => '/uploads/noavatar.jpg',
            ]);
            $user->categories()->create([
                'name' => 'PHP Dev',
                'description' => 'Intel i3',
                'status' => 1,
                
            ]);
            $user->subcategories()->create([
                'category_id' => '1',
                'name' => 'PHP Dev',
                'description' => 'Intel i3',
                'status' => 1,
                
            ]);

            // //send an email to user who just signed up
            // Mail::to($user->email)->send(new NewUserWelcomeMail());
        });
    }

    public function products(){

        return $this->hasMany(Product::class);
    }
    public function categories(){

        return $this->hasMany(Category::class);
    }
    public function subcategories(){

        return $this->hasMany(Subcategory::class);
    }
    public function profile(){

        return $this->hasOne(Profile::class);
    }
}
