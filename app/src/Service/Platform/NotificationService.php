<?php

namespace App\Service\Platform;

use App\Entity\Platform\Notification;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Mercure\HubInterface;
use Symfony\Component\Mercure\Update;

class NotificationService
{
    private HubInterface $hub;
    private EntityManagerInterface $entityManager;


    public function __construct(HubInterface $hub, EntityManagerInterface $entityManager){
    $this->hub = $hub;
    $this->entityManager = $entityManager;
    }

    public function notifyGroup($topic, $content, $date): void
    {
        $update = new Update(
            $topic,
            json_encode(['content' => $content,
                'date' => $date])
        );

        $this->hub->publish($update);

    }

    public function notifyUser($user, $content, $date): void
    {
        $update = new Update(
            'agora/notifications/user/'. $user,
            json_encode(['content' => $content,
                'date' => $date])
        );

        $this->hub->publish($update);
    }

    public function  storeNotification($user, $content): void
    {
        $notification = new Notification();
        $notification->setContent($content);
        $notification->setIsRead(false);
        $notification->setReceiver($user);
        $this->entityManager->persist($notification);
    }

    public function notifyManyUser($users, $content, $date): void
    {
        foreach ($users as $user) {
            $this->storeNotification($user, $content);
            $this->notifyUser($user->getId(), $content, $date->format('Y-m-d H:i:s.u'));
        }
        $this->entityManager->flush();
    }


}