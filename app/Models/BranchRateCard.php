<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BranchRateCard extends Model
{
    use HasFactory;
    protected $guarded = [];

    // A BranchRateCard belongs to a Branch
    public function branch():BelongsTo
    {
        return $this->belongsTo(Branch::class);
    }
}
