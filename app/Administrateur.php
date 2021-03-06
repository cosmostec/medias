<?php

/**
 * Created by Reliese Model.
 * Date: Wed, 29 May 2019 18:12:59 +0000.
 */

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class Administrateur
 * 
 * @property int $id
 * @property string $uuid
 * @property string $matricule
 * @property int $users_id
 * @property string $deleted_at
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * 
 * @property \App\User $user
 * @property \Illuminate\Database\Eloquent\Collection $compteurs
 *
 * @package App
 */
class Administrateur extends Eloquent
{
	use \Illuminate\Database\Eloquent\SoftDeletes;

	protected $casts = [
		'users_id' => 'int'
	];

	protected $fillable = [
		'uuid',
		'matricule',
		'users_id'
	];

	public function user()
	{
		return $this->belongsTo(\App\User::class, 'users_id');
	}

	public function compteurs()
	{
		return $this->hasMany(\App\Compteur::class, 'administrateurs_id');
	}
}
