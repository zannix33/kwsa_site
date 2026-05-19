<?php

namespace Modulatte\Core\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasFiles;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\DB;
use Modulatte\Core\Database\Factories\News\NewsFactory;

class News extends Model
{
    use HasFactory;
    use HasBlocks;
    use HasSlug;
    use HasMedias;
    use HasFiles;
    use HasRevisions;

    protected $fillable = [
        'published',
        'title',
        'headline',
        'content',
        'display_date'
    ];

    public $translatedAttributes = [
        'title',
        'headline',
        'content',
        'active',
    ];

    public $slugAttributes = [
        'title',
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'publish_start_date',
        'publish_end_date',
        'display_date'
    ];

    public $mediasParams = [
        'cover' => [
            'desktop' => [
                [
                    'name' => 'desktop',
                    'ratio' => 27 / 17,
                ],
            ],
            'mobile' => [
                [
                    'name' => 'mobile',
                    'ratio' => 27 / 17,
                ],
            ],
        ],
    ];

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(NewsCategory::class);
    }

    protected static function newFactory()
    {
        return NewsFactory::new();
    }

    public function scopePublishedArticle($query)
    {
        return $query->where('display_date', '<=',DB::raw('CURRENT_TIMESTAMP'));
    }
}
