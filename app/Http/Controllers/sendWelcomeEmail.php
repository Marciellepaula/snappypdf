<?php

use Illuminate\Http\RedirectResponse;
use Exception;
use SendinBlue\Client\Configuration;
use SendinBlue\Client\Api\TransactionalEmailsApi;
use SendinBlue\Client\Model\SendSmtpEmail;
use SendinBlue\Client\Model\SendSmtpEmailSender;

public function sendWelcomeEmail(): RedirectResponse
{
// Create a new Sendinblue API instance
$config = Configuration::getDefaultConfiguration()->setApiKey('api-key', env('SENDINBLUE_API_KEY'));
$apiInstance = new TransactionalEmailsApi(null, $config);

// Create a new email message
$email = new SendSmtpEmail([
'sender' => new SendSmtpEmailSender(['name' => 'Your Name', 'email' => 'your_email@example.com']),
'to' => [ ['email' => 'recipient@example.com'] ],
'subject' => 'Welcome to our website!',
'htmlContent' => '<p>Thank you for signing up. We are excited to have you on board.</p>',
]);

try {
// Send the email
$apiInstance->sendTransacEmail($email);
return redirect()->back()->with('success', 'Welcome email sent successfully!');
} catch (Exception $e) {
return redirect()->back()->with('error', 'An error occurred while sending the email: ' . $e->getMessage());
}
}