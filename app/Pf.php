<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pf extends Model
{
    public function scopeString($query, $protocolo) {
		return $query->where('protocolo', $protocolo);
	}
}
