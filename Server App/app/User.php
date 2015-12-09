<?php

namespace TubesRAI;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'kaders';
    protected $fk = 'kader_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nama', 'email', 'password', 'hak_akses'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public function biodata()
    {
        return $this->hasOne('TubesRAI\Biodata', $this->fk);
    }

    public function artikel()
    {
        return $this->hasMany('TubesRAI\Artikel', $this->fk);
    }

    public function kegiatan()
    {
        return $this->hasMany('TubesRAI\Kegiatan', $this->fk);
    }

    public function prestasi()
    {
        return $this->hasMany('TubesRAI\Prestasi', $this->fk);
    }
}
