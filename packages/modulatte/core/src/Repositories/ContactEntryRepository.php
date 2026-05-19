<?php

namespace Modulatte\Core\Repositories;

use Modulatte\Core\Models\ContactEntry;
use A17\Twill\Repositories\ModuleRepository;

class ContactEntryRepository extends ModuleRepository
{

    public function __construct(ContactEntry $model)
    {
        $this->model = $model;
    }
}
