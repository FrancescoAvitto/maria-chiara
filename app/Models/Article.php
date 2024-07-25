<?php

namespace App\Models;


use App\Models\Tag;
use Spatie\Image\Manipulations;
use Spatie\MediaLibrary\HasMedia;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\MediaCollections\Models\Media;


class Article extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = [
        'title',
        'subtitle',
        'slug',
        'body',
        'in_evidence'
    ];

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('gallery');
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('cover')
            ->crop(Manipulations::CROP_CENTER, 250, 250)
            ->sharpen(7)
            ->format('webp');

        $this->addMediaConversion('thumb')
            ->width(1080)
            ->height(720)
            ->sharpen(7)
            ->format('webp');


        $this->addMediaConversion('mini')
            ->width(80)
            ->height(80)
            ->sharpen(7)
            ->format('webp');

    }

    public function getRouteKeyName()
    {
        return $this->slug;
    }

    public function getTagsFormatted()
    {
        return $this->tags->pluck('name')->map( fn($tag) => '#' . $tag)->join(' ');
    }

    public function getCover()
    {
        return count($this->getMedia('gallery')) > 0  ? $this->getMedia('gallery')->first()->getUrl('thumb') : 'https://picsum.photos/300/200';
    }

}
