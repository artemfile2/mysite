<?php

namespace App\Http\Controllers\Admin;

use App\Models\Message;
use App\Models\Message_out;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PHPMailer\PHPMailer\PHPMailer;

class MailOutController extends Controller
{
    public function sent(Request $request){

        $this->validate($request, [
            'name' => 'required|max:50|min:3',
            'email' => 'required|email',
            'title' => 'required|max:30',
            'message' => 'required',
        ]);

        Message_out::create([
            'message_id' => $request->message_id,
            'name' => $request->name,
            'email' => $request->email,
            'title' => $request->title,
            'message' => $request->message,
        ]);

        Message::where('id', $request->message_id)
            ->update(['response' => 1]);

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

            //Recipients
            $mail->setFrom(env('MAIL_USERNAME'), $request->name);
            $mail->addAddress($request->email, $request->name);

            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = $request->title;
            $mail->Body    = nl2br($request->message);

            $mail->send();
        } catch (Exception $e) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }

        $messages = Message::all();
        $message_outs = Message_out::all();

        return redirect()->route('site.admin.messages', [
            'messages' => $messages,
            'message_outs' => $message_outs,
        ]);

    }
}
