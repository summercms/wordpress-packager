<?php

namespace Roots\WordPressPackager\ReleaseSources\Concerns;

// phpcs:disable
enum ReleaseType: string
{
    case Full = 'full';
    case NewBundled = 'new_bundled';
    case NoContent = 'no_content';
}
// phpcs:enable