<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The table associated with the model
     * @var string
     */
    protected $table = "categories";
    protected $primaryKey = "idcategories";

    /**
     * Indicates if the mode should be timestamped
     * @var bool
     */
    public $timestamps = false;
    protected $fillable = ['label'];
}
