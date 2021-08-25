<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class MainForm extends Model
{
    protected $fillable = [
        'fio',
        'fio2',
        'fio3',
        'day',
        'mouth',
        'years',
        'email',
        'phone',
        'vk',
        'facebook',
        'instagram',
        'city',
        'edu',
        'name_project',
        'select_mon',
        'opis_proj',
        'name_team',
        'email_team',
        'role_team',
        'phone_team',
        'name_team_1',
        'email_team_1',
        'role_team_1',
        'phone_team_1',
        'drop_box_file',
        'google_file',
        'pocht_index',
        'app',
        ];
        public function file_names()
        {
        return $this->hasMany('App\FileName', 'fileid');
        }    
}
