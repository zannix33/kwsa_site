<?php
namespace Modulatte\Core\Database\Seeders;

use A17\Twill\Models\Block;
use A17\Twill\Models\File;
use A17\Twill\Models\Media;
use A17\Twill\Repositories\BlockRepository;
use A17\Twill\Repositories\FileRepository;
use A17\Twill\Repositories\MediaRepository;
use Faker;
use Illuminate\Config\Repository as Config;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Modulatte\Core\Models\Page;

use Modulatte\Core\Repositories\PageRepository;

class CreatorSeeder extends Seeder
{
    protected $pageRepo;
    protected $mediaRepo;
    protected $fileRepo;
    protected $blockRepo;
    protected $config;
    protected $faker;

    public function __construct()
    {
        $this->config = new Config();
        $this->pageRepo = new PageRepository(new Page);
        $this->mediaRepo = new MediaRepository(new Media);
        $this->fileRepo = new FileRepository(new File);
        $this->blockRepo = new BlockRepository(new Block, $this->config);

        $this->faker = Faker\Factory::create();
    }

    /**
     * @param array $data
     *
     * @return App\Models\Page
     */
    public function createPage($data, $createFormAndViews = false)
    {
        $formNames = Str::kebab($data['title']);

        Page::factory()->create([
            'title' => Str::ucfirst($data['title']),
            'form' => Str::lower("admin.pages._${formNames}"),
            'view' => Str::lower("front.pages.${formNames}"),
            'data' => json_encode($data['data']),
        ]);

        if ($createFormAndViews) {
            copyFormAndViewStubs(Str::lower($formNames));
        }
    }

    /**
     * @param int $id
     * @param array $data
     *
     * @return App\Models\Page
     */
    public function addPageData($id, $data)
    {
        $page = $this->pageRepo->find($id);

        if ($page) {
            $page->data = $data;
            $page->save();

            return $page;
        }

        return null;
    }

    /**
     * Saves a record on the blocks table
     *
     * @param A17\Twill\Models\Model $page
     * @param string $content json string
     * @param string $type
     * @param string $editor
     * @param int $pos
     *
     * @return A17\Twill\Models\Block
     */
    public function createBlock($page, $content, $type, $editor, $pos)
    {
        $data = [
            'blockable_id' => $page->id,
            'blockable_type' => $page::class,
            'position' => $pos,
            'content' => $content,
            'type' => $type,
            'editor_name' => $editor,
        ];

        return $this->blockRepo->create($data);
    }

    /**
     * Saves multiple records on the blocks table
     *
     * @param A17\Twill\Models\Model $page
     * @param string $content json string
     * @param string $type
     * @param string $editor
     *
     * @return void
     */
    public function createBlocks($page, $data, $type, $editor)
    {
        if (count($data)) {
            foreach ($data as $index => $item) {
                $this->createBlock(
                    $page,
                    $item,
                    $type,
                    $editor,
                    ($index + 1)
                );
            }
        }
    }

    /**
     * @param string $filename
     * @param string $directory
     *
     * @return Media
     */
    public function createMedia($filename, $directory)
    {
        $fullPath = $directory . '/' . $filename;

        $uuidFolder = uniqid();
        $uuid = $uuidFolder . '/' . $filename;
        $path = storage_path('app/public/uploads');

        if (! is_dir($path)) {
            mkdir($path);
        }

        mkdir($path . '/' . $uuidFolder);
        copy(public_path($fullPath), $path. '/'.$uuid);

        list($w, $h) = getimagesize($path. '/'.$uuid);

        $fields = [
            'uuid' => $uuid,
            'filename' => $filename,
            'width' => $w,
            'height' => $h,
        ];

        return $this->mediaRepo->create($fields);
    }

    /**
     * @param string $filename
     * @param string $directory
     * @return \A17\Twill\Models\File
     */
    public function createFile($filename, $directory)
    {
        $fullPath = $directory . '/' . $filename;

        $uuidFolder = uniqid();
        $uuid = $uuidFolder . '/' . $filename;

        $path = storage_path('app/public/uploads/');

        if (! is_dir($path)) {
            mkdir($path);
        }

        mkdir($path . '/' . $uuidFolder);
        copy(public_path($fullPath), $path. '/' .$uuid);

        $size = filesize($path. '/'.$uuid);

        $fields = [
            'uuid' => $uuid,
            'filename' => $filename,
            'size' => $size,
        ];

        return $this->fileRepo->create($fields);
    }

    /**
     * @param mixed $model
     * @param \A17\Twill\Models\Media $media
     *
     * @return A17\Twill\Models\Model
     */
    public function createMediable($model, $media, $media_role)
    {
        $fields = [
            'mediable_id' => $model->id,
            'mediable_type' => $model::class,
            'media_id' => $media->id,
            'crop_w' => $media->width,
            'crop_h' => $media->height,
            'crop_x' => 0,
            'crop_y' => 0,
            'role' => $media_role,
            'crop' => 'desktop',
            'ratio' => 'desktop',
            'locale' => 'en',
            'metadatas' => $this->mediableMetaData(),
        ];

        return $model->medias()->attach($media, $fields);
    }

    /**
     * @param A17\Twill\Models\Block $block
     * @param A17\Twill\Models\Media $media
     *
     * @return A17\Twill\Models\Block
     */
    public function createBlockMediable($block, $media)
    {
        $fields = [
            'mediable_id' => $block->id,
            'mediable_type' => 'blocks',
            'media_id' => $media->id,
            'crop_w' => $media->width,
            'crop_h' => $media->height,
            'crop_x' => 0,
            'crop_y' => 0,
            'role' => 'image',
            'crop' => 'desktop',
            'ratio' => 'desktop',
            'locale' => 'en',
            'metadatas' => $this->mediableMetaData(),
        ];

        return $block->medias()->attach($media, $fields);
    }

    /**
     * @param App\Models\Page $page
     * @param \A17\Twill\Models\File $file
     * @return App\Models\Page
     */
    public function createFileable($page, $file, $file_role)
    {
        $fields = [
            'fileable_id' => $page->id,
            'fileable_type' => 'App\Models\Page',
            'file_id' => $file->id,
            'role' => $file_role,
            'locale' => 'en',
        ];

        return $page->files()->attach($file, $fields);
    }

    /**
     * Initial value for mediable metadata
     *
     * @return json
     */
    private function mediableMetaData()
    {
        return json_encode(
            [
                'video' => null,
                'altText' => null,
                'caption' => null,
            ]
        );
    }
}
