<?php

declare(strict_types=1);

namespace App;

use App\Support\Str;

class Article
{
    public string $title;
    public string $content;
    public string $date;
    public Author $author;
    public string $slug;


    public function __construct(string $title, string $content, string $date, Author $author, string $slug)
    {
        $this->title = $title;
        $this->content = $content;
        $this->date = (new \DateTime($date))->format('F jS Y');
        $this->author = $author;
        $this->slug = Str::kebabCase($slug);
    }

    public function getExcerpt(int $numberOfWords): string
    {
        $excerpt = implode(' ', array_slice(explode(' ', $this->content), 0, $numberOfWords));
        return $excerpt . "...";
    }
}
