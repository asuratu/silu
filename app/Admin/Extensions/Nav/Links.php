<?php

namespace App\Admin\Extensions\Nav;

class Links
{
    public function __toString()
    {
        return <<<HTML

<li>
    <a href="/" target="_blank" title="打开首页">
      <i class="fa fa-television"></i>
    </a>
</li>

HTML;
    }
}