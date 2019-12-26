<?php
/**
 * 消息模块
 */
namespace RongCloud\Message;

use RongCloud\Message\Chatroom\Chatroom;
use RongCloud\Message\Discussion\Discussion;
use RongCloud\Message\Group\Group;
use RongCloud\Message\History\History;
use RongCloud\Message\Person\Person;
use RongCloud\Message\System\System;
use RongCloud\Message\Broadcast\Broadcast;

class Message
{

    /**
     * 创建聊天室对象
     *
     * @return Chatroom
     */
    public function Chatroom(){
        return new Chatroom();
    }

    /**
     * 创建聊天室对象
     *
     * @return Discussion
     */
    public function Discussion(){
        return new Discussion();
    }

    /**
     * 创建聊天室对象
     *
     * @return Group
     */
    public function Group(){
        return new Group();
    }

    /**
     * 创建聊天室对象
     *
     * @return History
     */
    public function History(){
        return new History();
    }


    /**
     * 创建聊天室对象
     *
     * @return Person
     */
    public function Person(){
        return new Person();
    }

    /**
     * 创建聊天室对象
     *
     * @return System
     */
    public function System(){
        return new System();
    }

    /**
     * 创建广播消息对象
     *
     * @return Broadcast
     */
    public function Broadcast(){
        return new Broadcast();
    }
}