<?php

class SlackMessenger
{
    public function message($message)
    {
        $message->parse();
    }
}

class text
{
    public function parse()
    {
        echo('text message');
    }
}

class picture
{
    public function parse()
    {
        echo('picture message');
    }
}

class video
{
    public function parse()
    {
        echo('video message');
    }
}