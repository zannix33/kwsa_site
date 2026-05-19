<?php

namespace Modulatte\Core\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasFiles;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Kalnoy\Nestedset\NodeTrait;
use Modulatte\Core\Database\Factories\PageFactory;
use Modulatte\Core\Traits\ClearsResponseCache;

class Page extends Model
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
        'published',
        'title',
        'seo_title',
        'seo_description',
        'seo_canonical_url',
        'seo_keywords',
        'form',
        'view',
        'data',
        'location',
    ];

    public $casts = [
        'location' => 'array',
        // 'data' => 'array',
    ];

    public $slugAttributes = [
        'title',
    ];

    public $mediasParams = [
        'cover_image' => [
            'desktop' => [
                [
                    'name' => 'desktop',
                    'ratio' => 587 / 721,
                ],
            ],
            'tablet' => [
                [
                    'name' => 'tablet',
                    'ratio' => 1,
                ],
            ],
            'mobile' => [
                [
                    'name' => 'mobile',
                    'ratio' => 1,
                ],
            ],
        ],
        'benefits_image_1' => [
            'desktop' => [
                [
                    'name' => 'desktop',
                    'ratio' => 1,
                ],
            ],
            'tablet' => [
                [
                    'name' => 'tablet',
                    'ratio' => 1,
                ],
            ],
            'mobile' => [
                [
                    'name' => 'mobile',
                    'ratio' => 1,
                ],
            ],
        ],
        'benefits_image_2' => [
            'desktop' => [
                [
                    'name' => 'desktop',
                    'ratio' => 1,
                ],
            ],
            'tablet' => [
                [
                    'name' => 'tablet',
                    'ratio' => 1,
                ],
            ],
            'mobile' => [
                [
                    'name' => 'mobile',
                    'ratio' => 1,
                ],
            ],
        ],
        'benefits_image_3' => [
            'desktop' => [
                [
                    'name' => 'desktop',
                    'ratio' => 1,
                ],
            ],
            'tablet' => [
                [
                    'name' => 'tablet',
                    'ratio' => 1,
                ],
            ],
            'mobile' => [
                [
                    'name' => 'mobile',
                    'ratio' => 1,
                ],
            ],
        ],
        'benefits_image_4' => [
            'desktop' => [
                [
                    'name' => 'desktop',
                    'ratio' => 1,
                ],
            ],
            'tablet' => [
                [
                    'name' => 'tablet',
                    'ratio' => 1,
                ],
            ],
            'mobile' => [
                [
                    'name' => 'mobile',
                    'ratio' => 1,
                ],
            ],
        ],
        'benefits_image_5' => [
            'desktop' => [
                [
                    'name' => 'desktop',
                    'ratio' => 1,
                ],
            ],
            'tablet' => [
                [
                    'name' => 'tablet',
                    'ratio' => 1,
                ],
            ],
            'mobile' => [
                [
                    'name' => 'mobile',
                    'ratio' => 1,
                ],
            ],
        ],
    ];

    public static function saveTreeFromIds($nodeTree)
    {
        $nodeModels = self::all();
        $nodeArrays = self::flattenTree($nodeTree);

        foreach ($nodeArrays as $nodeArray) {
            $nodeModel = $nodeModels->where('id', $nodeArray['id'])->first();

            if ($nodeArray['parent_id'] === null) {
                if (! $nodeModel->isRoot() || $nodeModel->position !== $nodeArray['position']) {
                    $nodeModel->position = $nodeArray['position'];
                    $nodeModel->saveAsRoot();
                }
            } else {
                if ($nodeModel->position !== $nodeArray['position'] || $nodeModel->parent_id !== $nodeArray['parent_id']) {
                    $nodeModel->position = $nodeArray['position'];
                    $nodeModel->parent_id = $nodeArray['parent_id'];
                    $nodeModel->save();
                }
            }
        }
    }

    public static function flattenTree(array $nodeTree, int $parentId = null)
    {
        $nodeArrays = [];
        $position = 0;

        foreach ($nodeTree as $node) {
            $nodeArrays[] = [
                'id' => $node['id'],
                'position' => $position++,
                'parent_id' => $parentId,
            ];

            if (count($node['children']) > 0) {
                $childArrays = self::flattenTree($node['children'], $node['id']);
                $nodeArrays = array_merge($nodeArrays, $childArrays);
            }
        }

        return $nodeArrays;
    }

    protected static function newFactory(): Factory
    {
        return PageFactory::new();
    }
}
