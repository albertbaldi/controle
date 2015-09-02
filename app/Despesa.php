<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Despesa extends Model
{
	protected $fillable = ['data', 'vencimento', 'descricao', 'parecela', 'parcelas', 'valor'];
	protected $guarded = ['id'];

	public function categoria()
	{
		return $this->belongsTo('App\Categoria');
	}

}
