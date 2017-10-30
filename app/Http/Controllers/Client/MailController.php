<?php

namespace App\Http\Controllers\Client;

use App\Mail\MailShipped;
use App\Models\Message;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\MessageBag;
use PHPMailer\PHPMailer\PHPMailer;

class MailController extends Controller
{
    public function sent(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|max:50|min:3',
            'email' => 'required|email',
            'title' => 'required|max:30',
            'message' => 'required',
        ]);

        //TODO: сделать jquery чтоб при отправке сообщения страница не перезагружалась
        //todo: реализовать реальную отправку почты

        Message::create([
            'name' => $request->name,
            'email' => $request->email,
            'title' => $request->title,
            'message' => $request->message,
        ]);

        $posts = Post::all()
            ->sortByDesc('created_at');

        $mail = new PHPMailer(true);         // Passing `true` enables exceptions
        try {
            //Server settings
            $mail->SMTPDebug = 0;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = env('MAIL_HOST');  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = env('MAIL_USERNAME');                 // SMTP username
            $mail->Password = env('MAIL_PASSWORD');                   // SMTP password
            $mail->CharSet = 'UTF-8';
            $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 465;                                    // TCP port to connect to
            //$mail->setLanguage('ru', '/optional/path/to/language/directory/');

            //Recipients
            $mail->setFrom(env('MAIL_USERNAME'), $request->name);
            $mail->addAddress('file2@rambler.ru', 'Joe User');
            /*$mail->addReplyTo('info@example.com', 'Information');
            $mail->addCC('cc@example.com');
            $mail->addBCC('bcc@example.com');*/

            //Attachments
            /*$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
            $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name*/

            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            //$subj = str_replace(" ", "%20", $request->title);
            $mail->Subject = $request->title;
            $mail->Body    = $request->message . "<br><br>" .
            'Связяться пользователем можно по email <a href="mailto:' . $request->email .
            '">' . $request->email . '</a>';
            //'?subject='.$subj.'">' . $request->email . '</a>';


            //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
        } catch (Exception $e) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }

        return view('client.pages.section', [
            'title' => 'Главная страница',
            'posts' => $posts,
            'mess' => 1,
        ]);
    }
}
