<?php

namespace Ezadev\PHPInfo\Http\Controllers;

use Ezadev\Admin\Layout\Content;
use Illuminate\Routing\Controller;

class PHPInfoController extends Controller
{
    public function index(Content $content)
    {
        return $content
            ->title('Title')
            ->description('Description')
            ->body(view('phpinfo::index'));
    }
}