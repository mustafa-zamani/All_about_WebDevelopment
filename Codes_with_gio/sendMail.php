
use all this inside class/function
$email = (new Email())
    ->from()
    ->to()
    -subject()

$dsn = 'smtp server';

$transport = Transport::fromDsn($dsn);
$mailer = new Mailer();

move line 10 11 

public function __construct(portected MailerInterface $mailer)
{

}

//////////////
in App.php
class App function __construct 
    $this->container->set(MailerInterface::class, CustomMailer::class);

create CustomMailer class
    class CustomMailer implements MailerInterface
    {
        public function __construct(portected string $dsn){
            $this->transport = Transport::fromDsn($dsn);
        }
        public function send (RawMessage $message, Envelope $envelope = null):void
        {
            $this->transport->send($message, $envelope);
        }
    }
$mailer->send($email);

install mail service

configure mail service

