<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuoteRequest extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'service_type',
        'event_type',
        'expected_attendees',
        'event_date',
        'event_duration',
        'event_location',
        'required_space',
        'space_type',
        'budget_range',
        'special_requirements',
        'full_name',
        'email',
        'phone',
        'company',
        'attachments',
        'urgent',
        'status',
    ];
    
    protected $casts = [
        'event_date' => 'date',
        'expected_attendees' => 'integer',
        'required_space' => 'integer',
        'attachments' => 'array',
        'urgent' => 'boolean',
    ];
    
    public function scopePending($query)
    {
        return $query->where('status', 'pending');
    }
    
    public function scopeReviewed($query)
    {
        return $query->where('status', 'reviewed');
    }
    
    public function scopeReplied($query)
    {
        return $query->where('status', 'replied');
    }
    
    public function scopeUrgent($query)
    {
        return $query->where('urgent', true);
    }
    
    public function scopeLatest($query)
    {
        return $query->orderBy('created_at', 'desc');
    }
}
