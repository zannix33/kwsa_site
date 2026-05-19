<?php

namespace Modulatte\Core\Repositories;

use A17\Twill\Repositories\Behaviors\HandleBlocks;
use A17\Twill\Repositories\Behaviors\HandleFiles;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleRepeaters;
use A17\Twill\Repositories\Behaviors\HandleRevisions;
use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\ModuleRepository;
use Illuminate\Support\Facades\DB;
use Modulatte\Core\Models\Page;

class PageRepository extends ModuleRepository
{
    use HandleBlocks;
    use HandleSlugs;
    use HandleMedias;
    use HandleFiles;
    use HandleRevisions;
    use HandleRepeaters;

    protected $fieldsGroups = [
        'data' => [
            // Home
            'header_lead_copy',
            'header_content',

            'home_features_content',

            'about_text',
            'about_header',
            'about_contact_text',

            'benefits_text',
            'benefits_caption_1',
            'benefits_caption_2',
            'benefits_caption_3',
            'benefits_caption_4',
            'benefits_caption_5',


            'process_text',

            'contact_title',
            'contact_text',

            'footer_title',
            'footer_text',
            'footer_right_text',
            'footer_right_note',

            'lead_copy',

            // Contact
            'contact_nav_text',
            'contact_phone',
            'contact_email',
            'contact_address',
            'contact_location',

            // Privacy
            'privacy_nav_text',
            'privacy_content',

            //  Terms
            'terms_nav_text',
            'terms_content',

        ],
    ];

    public function __construct(Page $model)
    {
        $this->model = $model;
    }

    public function afterSave($object, $fields)
    {
        //$this->updateBrowser($object, $fields, 'services');
        parent::afterSave($object, $fields);
    }

    public function getFormFields($object)
    {
        $fields = parent::getFormFields($object);
        //$fields['browsers']['services'] = $this->getFormFieldsForBrowser($object, 'services');

        return $fields;
    }

    public function setNewOrder($ids)
    {
        DB::transaction(function () use ($ids) {
            Page::saveTreeFromIds($ids);
        }, 3);
    }
}
