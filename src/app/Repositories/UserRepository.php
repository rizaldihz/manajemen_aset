<?php

namespace App\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\Storage;

class UserRepository
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function find($id)
    {
        return $this->user->find($id);
    }

    public function create($params)
    {
        return $this->user->create($params);
    }

    public function get($params=NULL)
    {
        if($params)
            return $this->user->where($params)->orderBy('created_at', 'DESC')->get();
        return $this->user->orderBy('created_at', 'DESC')->get();
    }
    public function getFirst($params=NULL)
    {
        if($params)
            return $this->user->where($params)->orderBy('created_at', 'DESC')->first();
        return $this->user->orderBy('created_at', 'DESC')->first();
    }

    public function delete($id)
    {
        $toDelete = $this->user->find($id);
        return $toDelete->delete();
    }
}