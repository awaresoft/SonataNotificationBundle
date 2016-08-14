<?php

namespace Awaresoft\Sonata\NotificationBundle\Entity;

use Sonata\NotificationBundle\Entity\BaseMessage as BaseMessage;

/**
 * Message Entity
 *
 * @author Bartosz Malec <b.malec@awaresoft.pl>
 */
class Message extends BaseMessage
{
    /**
     * @var integer $id
     */
    protected $id;

    /**
     * Get id
     *
     * @return integer $id
     */
    public function getId()
    {
        return $this->id;
    }
}