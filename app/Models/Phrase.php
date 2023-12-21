<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sitemap\Contracts\Sitemapable;
use Spatie\Sitemap\Tags\Url;
use Illuminate\Support\Str;

class Phrase extends Model implements Sitemapable
{
    use HasFactory;

    protected $fillable = [
        'title', 'content'
    ];

    public function toSitemapTag(): Url | string | array
    {
        return Url::create(route('phrases.show', [$this->id, Str::slug($this->title)]))
            ->setLastModificationDate(Carbon::create($this->updated_at))
            ->setChangeFrequency(Url::CHANGE_FREQUENCY_WEEKLY)
            ->setPriority(0.1);
    }
}
