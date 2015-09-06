<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Kyslik\ColumnSortable\Sortable;

class Despesa extends Model
{
	use Sortable;

	protected $sortable = ['data', 'descricao', 'parcelas', 'valor']; //ommitable

	protected $fillable = ['data', 'descricao','parcelas', 'valor', 'categoria_id'];
	
	protected $guarded = ['id'];

	public function categoria()
	{
		return $this->belongsTo('App\Categoria');
	}

	public function items()
	{
		return $this->hasMany('App\DespesaItem');
	}
}
