<?php


namespace App\Http\Controllers;

use Exception;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use SendinBlue\Client\Api\TransactionalEmailsApi;
use SendinBlue\Client\Configuration;
use SendinBlue\Client\Model\SendSmtpEmail;
use SendinBlue\Client\Model\SendSmtpEmailSender;

class WelcomeController extends Controller
{
    public function sendWelcomeEmail()
    {
        //  cria uma nova instancia de Sendinblue API 
        $config = Configuration::getDefaultConfiguration()->setApiKey('api-key', env('SENDINBLUE_API_KEY'));
        $apiInstance = new TransactionalEmailsApi(null, $config);

        // Recupere o e-mail do destinatário dinamicamente do banco de dados

        $recipientEmail = 'marciellepaula@sobral.ce.gov.br'; // Assuming the user's email field is named 'email'

        //  Criar uma nova mensagem 
        $email = new SendSmtpEmail([
            'sender' => new SendSmtpEmailSender(['name' => 'Your Name', 'email' => 'marcielle@hotmail.com']),
            'to' => [['email' => $recipientEmail]],
            'subject' => 'Welcome to our website!',
            'htmlContent' => '<p>hey girl Thank you for signing up. We are excited to have you on board.</p>',


        ]);

        try {
            // enviar o email 
            $apiInstance->sendTransacEmail($email);
        } catch (Exception $e) {

            Session::flash('error', 'An error occurred while sending the email: ' . $e->getMessage());
            return $e->getMessage();
        }
    }
}
