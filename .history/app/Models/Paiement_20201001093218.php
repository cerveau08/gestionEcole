<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    use HasFactory;

    $table->dropForeign(['pick_detail_id']);
$table->dropColumn('pick_detail_id');
}
