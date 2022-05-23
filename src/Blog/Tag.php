<?php

declare(strict_types=1);

// Category
// - id
// - name / titre
// - description
// - created_at
// - created_by
// - edited_at
// - edited_by
// - deleted_at
// - deleted_by

namespace App\Blog;

use App\Blog\ANameObject;
use App\Blog\Traits\Articlable;

class Tag extends ANameObject
{
    use Articlable;

    public function __construct(int $id, string $name, ?string $description, array $articles = [])
    {
        parent::__construct($id, $name, $description);
        $this->articles = $articles;
    }
}
