<?php namespace App;

interface Notificable
{
    public function notify(Object $subject);
}