<?php
# Include the Autoloader (see "Libraries" for install instructions)
require 'vendor/autoload.php';
use Mailgun\Mailgun;

# Instantiate the client.
$mgClient = new Mailgun('cff823e776d576fd37028895b45d8d68-fd0269a6-a8b73a6c'); //MailGun key
$domain = "sandboxf866b496097e4d1d969c61a8d965cd4a.mailgun.org";

# Make the call to the client.
$result = $mgClient->sendMessage("$domain",
          array('from'    => 'Mailgun Sandbox <postmaster@sandboxf866b496097e4d1d969c61a8d965cd4a.mailgun.org>',
                'to'      => 'Leesa <lraby11@gmail.com>',
                'subject' => 'Hello Leesa',
                'text'    => 'Congratulations Leesa, you just sent an email with Mailgun! You are truly awesome!'));

var_dump($result);
