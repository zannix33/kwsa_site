<?php

namespace Modulatte\Core\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasFiles;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Model;
use Modulatte\Core\Traits\ClearsResponseCache;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Factories\Factory;
use Modulatte\Core\Database\Factories\ProjectCategoryFactory;


class ProjectCategory extends Model
{
    use HasBlocks;
    use HasSlug;
    use HasMedias;
    use HasFactory;
    use HasFiles;
    use HasRevisions;
    use ClearsResponseCache;

    protected $fillable = [
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

    public function projects(): BelongsToMany
    {
        return $this->belongsToMany(Project::class);
    }

    protected static function newFactory(): Factory
    {
        return ProjectCategoryFactory::new();
    }
}
