<?php

namespace AppBundle\Controller;


use Avanzu\AdminThemeBundle\Event\MessageListEvent;
use Avanzu\AdminThemeBundle\Event\NotificationListEvent;
use Avanzu\AdminThemeBundle\Event\ShowUserEvent;
use Avanzu\AdminThemeBundle\Event\TaskListEvent;
use Avanzu\AdminThemeBundle\Event\ThemeEvents;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Symfony\Component\HttpFoundation\Response;
use Avanzu\AdminThemeBundle\Controller\NavbarController as MasterNavBarController;

class NavbarController extends MasterNavBarController
{

    public function projectsAction($max = 5)
    {

        return $this->render(
                    ':Navbar:projects.html.twig',
                        array(
                            'messages' => 'rien',
                            'total'    => '10'
                        )
        );
    }

    public function userAction()
    {

        if (!$this->getDispatcher()->hasListeners(ThemeEvents::THEME_NAVBAR_USER)) {
            return new Response();
        }
        $userEvent = $this->getDispatcher()->dispatch(ThemeEvents::THEME_NAVBAR_USER, new ShowUserEvent());

        return $this->render(
                    'AvanzuAdminThemeBundle:Navbar:user.html.twig',
                        array(
                            'user' => $userEvent->getUser()
                        )
        );
    }

}