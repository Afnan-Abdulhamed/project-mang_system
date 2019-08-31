<?php

namespace App;

use App\Events\ProjectCreated;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    /**
     * The event map for the model.
     *
     * @var array
     */
    protected $dispatchesEvents = [
        'created' => ProjectCreated::class,
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'start_date',
        'end_date',
        'confirmed',
        'description',
        'image',
        'type',
        'theme',
        'user_id',
        'created_at',
        'updated_at'
    ];

    /**
     * relation with User model
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Set the confirmed value
     *
     * @param  string  $value
     * @return void
     */
    public function setconfirmedAttribute($value)
    {
        $this->attributes['confirmed'] = ( $value == 'on')? 1 : 0;
    }

     /**
     * Get the confirmed value
     *
     * @param  string  $value
     * @return void
     */
    public function getConfirmedAttribute($value)
    {
        return  $this->attributes['confirmed'] = ( $value == 1) ? 'Active' : 'Inactive';
    }

}
