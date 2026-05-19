<?php
namespace Modulatte\Core\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasFiles;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Model;
use Modulatte\Core\Traits\ClearsResponseCache;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modulatte\Core\Database\Factories\ProjectFactory;
use Illuminate\Database\Eloquent\Factories\Factory;
use Kalnoy\Nestedset\NodeTrait;

class Project extends Model
{
    use NodeTrait;
    use HasBlocks;
    use HasSlug;
    use HasMedias;
    use HasFactory;
    use HasFiles;
    use HasRevisions;
    use ClearsResponseCache;

    protected $fillable = [
        'title',
        'content',
    ];
    
    public $slugAttributes = [
        'title',
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
        return $this->belongsToMany(ProjectCategory::class);
    }

    protected static function newFactory(): Factory
    {
        return ProjectFactory::new();
    }
}
