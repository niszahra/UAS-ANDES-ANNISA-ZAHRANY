<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'rooms';

    protected $fillable = ['room_number', 'description', 'available', 'status', 'room_type_id'];

    /**
     * Get the gallery that owns the image.
     */
    public function room_type()
    {
        return $this->belongsTo('App\Model\RoomType');
    }
}