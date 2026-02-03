<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title_ar',
        'title_en',
        'description_ar',
        'description_en',
        'slug',
        'icon',
        'image',
        'features_ar',
        'features_en',
        'gallery_images',
        'featured',
        'sort_order',
        'status',
    ];
    
    protected $casts = [
        'gallery_images' => 'array',
        'features_ar' => 'array',
        'features_en' => 'array',
        'featured' => 'boolean',
        'status' => 'boolean',
    ];
    
    public function getTitleAttribute()
    {
        return app()->getLocale() === 'ar' ? $this->title_ar : $this->title_en;
    }
    
    public function getDescriptionAttribute()
    {
        return app()->getLocale() === 'ar' ? $this->description_ar : $this->description_en;
    }
    
    public function getFeaturesAttribute()
    {
        return app()->getLocale() === 'ar' ? $this->features_ar : $this->features_en;
    }
    
    public function scopeFeatured($query)
    {
        return $query->where('featured', true);
    }
    
    public function scopeActive($query)
    {
        return $query->where('status', true);
    }
    
    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order')->orderBy('created_at', 'desc');
    }
    
    public function getRouteKeyName()
    {
        return 'slug';
    }
    
    public function getRouteKey()
    {
        return 'slug';
    }
}
