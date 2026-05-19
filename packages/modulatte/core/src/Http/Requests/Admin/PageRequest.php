<?php

namespace Modulatte\Core\Http\Requests\Admin;

use A17\Twill\Http\Requests\Admin\Request;

class PageRequest extends Request
{
    public function rulesForCreate(): array
    {
        return [
            'title' => [
                'required',
            ],
        ];
    }

    public function rulesForUpdate(): array
    {
        return [
            'title' => [
                'required',
            ],
        ];
    }
}
