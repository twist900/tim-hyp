<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Codesleeve\Stapler\ORM\StaplerableInterface;
use Codesleeve\Stapler\ORM\EloquentTrait;


class Attachment extends Model implements StaplerableInterface
{
    use EloquentTrait;

    protected $fillable = ['image'];

    public function __construct(array $attributes = array()) {
      $this->hasAttachedFile('image', [
          'styles' => [
              'large' => '640x640',
              'medium' => '268x249',
              'thumb' => '180x180',
              'tiny' => '75x75',
          ]
      ]);

      parent::__construct($attributes);
    }

  /**
      * Get all of the owning viewable models.
      */
     public function viewable()
     {
         return $this->morphTo();
     }

}
