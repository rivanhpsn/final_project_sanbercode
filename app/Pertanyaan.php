<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    protected $table="pertanyaan";

    protected $guarded = [];

    public function tags() {
        return $this->belongsToMany('App\Tag', 'pertanyaan_tags', 'pertanyaan_id', 'tag_id');
    }
}
