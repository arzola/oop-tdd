<?php

use App\User;
use App\Notificators\EmailNotification;
use App\Notificators\WhatsAppNotification;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function test_if_notifications_are_triggered()
    {
        $user = new User('Luisa', new EmailNotification);
        $result = $user->update();

        $this->assertEquals("Enviando notificación por Email a Luisa", $result);

        $user = new User('Mario', new EmailNotification);
        $result = $user->update();

        $this->assertEquals("Enviando notificación por Email a Mario", $result);

        $anotherUser = new User('Roberto', new WhatsAppNotification);
        $secondResult = $anotherUser->update();

        $this->assertEquals("Enviando notificación por Whatsapp a Roberto", $secondResult);

        $newUser = new User('Mariana', new TelegramNotification);
        $newResult = $newUser->update();

        $this->assertEquals("Enviando notificación por Telegram a Mariana", $newResult);
    }
}
