<?php

namespace App\Policies;

use App\Eloquent\User;

class UserPolicy extends AbstractPolicy
{

    public function read(User $user, User $ability)
    {
    	if (!$this->checkAbility($user, __FUNCTION__, $ability)) {
            return false;
        }
        if ($ability->id) {
            if ($ability->is('system')) {
                return false;
            }
            if ($ability->is('admin')) {
                return false;
            }
            if ($user->id == $ability->id) {
            	return false;
            }
        }

        return true;
    }

    public function write(User $user, User $ability)
    {
    	if (!$this->checkAbility($user, __FUNCTION__, $ability)) {
            return false;
        }
        if ($ability->id) {
            if ($ability->is('system')) {
                return false;
            }
            if ($ability->is('admin')) {
                return false;
            }
            if ($user->id == $ability->id) {
            	return false;
            }
        }

        return true;
    }
}
