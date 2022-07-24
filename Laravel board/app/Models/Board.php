<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    use HasFactory;
    // protected $table = '바꾸고 싶은 테이블 명';
    // protected $primaryKey = '바꾸고 싶은 pk';
    protected $fillable = ['title', 'ctnt', 'hits']; // 내용을 입력하고 싶은 컬럼
    protected $guarded = ['created_at']; // 한번 입력되면 수정이 되지 않게 보호
}
