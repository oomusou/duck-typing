<?php

class SlackMessenger
{
    public function message(MessageInterface $message)
    {
        $message->parse();
    }
}

interface MessageInterface
{
    public function parse();
}

class text implements MessageInterface
{
    public function parse()
    {
        echo('text message');
    }
}

class picture implements MessageInterface
{
    public function parse()
    {
        echo('picture message');
    }
}

class video implements MessageInterface
{
    public function parse()
    {
        echo('video message');
    }
}