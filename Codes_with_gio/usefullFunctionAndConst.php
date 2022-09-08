<?php

$filePath = __DIR__.'/'. $_FILES;
move_uploaded_file($_FILES['doc name']['dir addr'], $filePath);

$emaill = (new Email())
    ->attachFromPath()
    ->getAttachments();

    # .env file
    # address the dsn to .env variable
    # Create the variable Mailer_DSN in .env
    $transport = Transport::fromDsn($_ENV['MAILER_DSN']);