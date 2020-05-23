<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Newsletter extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email',
    ];



    // public function routeNotificationForMail($notification)
    // {
    //     // Return email address only...
    //     //return $this->email_address;
    //     return 'frederic.blanc@itanea.fr';

    //     // Return name and email address...
    //     // return [$this->email_address => $this->name];
    // }
}
