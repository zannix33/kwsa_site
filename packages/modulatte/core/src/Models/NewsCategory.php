<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Modulatte\Core\Models;

use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Modulatte\Core\Database\Factories\News\NewsCategoryFactory;
use Modulatte\Core\Traits\ClearsResponseCache;

/**
 * Model for news page object
 *
 * @author Brownpaperbag
 */
class NewsCategory extends Model
{
    use HasSlug;
    use HasFactory;
    use HasMedias;
    use ClearsResponseCache;

    protected $fillable = [
        'published',
        'title',
        'description',
    ];
    public $slugAttributes = [
        'title',
    ];
    public $mediasParams = [
        'cover' => [
            'desktop' => [
                [
                    'name' => 'desktop',
                    'ratio' => 16 / 9,
                ],
            ],
            'mobile' => [
                [
                    'name' => 'mobile',
                    'ratio' => 1,
                ],
            ],
            'flexible' => [
                [
                    'name' => 'free',
                    'ratio' => 0,
                ],
                [
                    'name' => 'landscape',
                    'ratio' => 16 / 9,
                ],
                [
                    'name' => 'portrait',
                    'ratio' => 3 / 5,
                ],
            ],
        ],
    ];

    public function articles(): BelongsToMany
    {
        return $this->belongsToMany(Article::class);
    }

    protected static function newFactory()
    {
        return NewsCategoryFactory::new();
    }
}
