<?php
namespace Avanzu\AdminThemeBundle\EventListener;

use Avanzu\AdminThemeBundle\Event\ShowUserEvent;
use AppBundle\Model\UserModel;

class ShowUserListener {

    public function onShowUser(ShowUserEvent $event) {

        $user = new UserModel();
        $user->setAvatar('')->setIsOnline(true)->setMemberSince(new \DateTime())->setUsername('Demo User');

        $event->setUser($user);
    }

}