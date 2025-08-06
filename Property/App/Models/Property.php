<?php

namespace Modules\Property\App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Tags\HasTags;
use Modules\Category\Entities\Category;
use Modules\Payment\Traits\GHNServiceTrait;

class Property extends Model implements HasMedia
{
    use InteractsWithMedia, HasTags,GHNServiceTrait;
    protected $fillable = [
        'name','slug','status','transaction_type','total_price','price_per_m2','area','address','street_name',
        'legal_document_id', 'bedrooms','bathrooms','floors','direction','build_year','latitude','longitude','is_active',
        'short_description','description','meta_title','meta_description','meta_keywords','og_title','og_description','og_image','created_by',
    ];

    public function legalDocument(): BelongsTo
    {
        return $this->belongsTo(LegalDocument::class);
    }


    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(100)
            ->height(100)
            ->sharpen(10)
            ->nonQueued();
    }

    public function categories()
    {
        return $this->morphToMany(Category::class, 'categorizable');
    }

    public function productPriorities(): HasMany
    {
        return $this->hasMany(ProductPriority::class, 'property_id');
    }
    public function propertyFurnitures(): HasMany
    {
        return $this->hasMany(PropertyFurniture::class, 'property_id');
    }


    public function customFurnitures(): HasMany
    {
        return $this->hasMany(CustomFurniture::class);
    }

    public function furnitureTypes(): BelongsToMany
    {
        return $this->belongsToMany(FurnitureType::class, 'property_furnitures', 'property_id', 'furniture_type_id')
            ->withPivot('quantity');
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('main_image')
            ->singleFile()
            ->acceptsMimeTypes(['image/jpeg', 'image/png', 'image/gif']);

        $this->addMediaCollection('gallery')
            ->acceptsMimeTypes(['image/jpeg', 'image/png', 'image/gif']);

        $this->addMediaCollection('documents')
            ->acceptsMimeTypes(['application/pdf', 'application/msword']);

        $this->addMediaCollection('og_image')
            ->singleFile()
            ->acceptsMimeTypes(['image/jpeg', 'image/png', 'image/gif']);
    }

    public function scopeWithTags($query, $tags, $type = null)
    {
        $tags = collect($tags)->map(function ($tag) {
            return is_array($tag) && isset($tag['']) ? $tag[''] : $tag;
        })->filter()->unique();

        return parent::scopeWithTags($query, $tags, $type ?? 'property_tags');
    }
}
 