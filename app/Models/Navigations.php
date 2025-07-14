<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Navigations extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * กำหนดความสัมพันธ์: เมนูย่อยของตัวเอง
     */
    public function children()
    {
        return $this->hasMany(Navigations::class, 'parent_id', 'id')
                    ->where('status', 'active') // อาจจะกรองเฉพาะสถานะ active
                    ->orderBy('order_id'); // เรียงตามลำดับ
    }

    /**
     * กำหนดความสัมพันธ์: เมนูแม่ของตัวเอง
     */
    public function parent()
    {
        return $this->belongsTo(Navigations::class, 'parent_id', 'id');
    }
}
