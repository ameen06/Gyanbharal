<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sitemap\Contracts\Sitemapable;
use Spatie\Sitemap\Tags\Url;
use Illuminate\Support\Str;

class Page extends Model implements Sitemapable
{
    use HasFactory;

    protected $fillable = [
        'page_title', 'page_icon', 'page_content'
    ];

    public function toSitemapTag(): Url | string | array
    {
        return Url::create(route('pages.show', [$this->id, Str::slug($this->page_title)]))
            ->setLastModificationDate(Carbon::create($this->updated_at))
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
            ->setPriority(0.1);
    }
}
