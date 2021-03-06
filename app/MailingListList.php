<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MailingListList extends Model
{
    public function topics()
    {
        return $this->hasMany('App\MailingListTopic');
    }

    public function getListUrl()
    {
        return '/mailing-list/'. $this->slug;
    }
}
