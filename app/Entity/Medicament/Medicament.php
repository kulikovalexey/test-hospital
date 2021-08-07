<?php

namespace App\Entity\Medicament;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Entity\Medicament\Medicament
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Medicament newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Medicament newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Medicament query()
 * @method static \Illuminate\Database\Eloquent\Builder|Medicament whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medicament whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medicament whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medicament whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medicament whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Medicament extends Model
{
    protected $fillable = ['name', 'description'];
}
