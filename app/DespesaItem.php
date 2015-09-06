<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DespesaItem extends Model
{
	protected $fillable = ['despesa_id', 'data', 'valor', 'parcela'];
	protected $guarded = ['id'];

	public function despesa()
	{
		return $this->belongsTo('App\Despesa');
	}
}
