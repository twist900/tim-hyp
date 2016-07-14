<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Codesleeve\Stapler\ORM\StaplerableInterface;
use Codesleeve\Stapler\ORM\EloquentTrait;

class Service extends Model implements StaplerableInterface
{
    use ViewsCountTrait;
    use EloquentTrait;

    public function __construct(array $attributes = array()) {

        $this->hasAttachedFile('wide_image', [
            'styles' => [
                'wide' => '1920x1200',
            ]
        ]);

        parent::__construct($attributes);
    }

    public $morphClass = 'MorphService';
    protected $guarded = [];

    public function taxon()
    {
      return $this->belongsTo('App\Taxon');
    }

    public function faqs()
    {
      return $this->hasMany('App\Faq', 'service_id');
    }
}
