<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\MainForm;
use App\FileName;
use App\News;
use Excel;
use App\Exports\ProjectExport;

class MainController extends Controller
{
  public function index()
  {
    $news = News::latest()->get();
    $mainforms = MainForm::latest()->get();
    return view('pages.main', compact('mainforms', 'news'));
  }
  public function programm()
  {
    return view('pages.programm');
  }
  public function news(News $id)
  {
    return view('pages.news', compact('id'));
  }
  public function result()
  {
    $items = FileName::latest()->get();
    $mainforms = MainForm::with('file_names')->latest()->get();
    return view('pages.result', compact('mainforms', 'items'));
  }
  public function contact(Request $request)
  {
    if($request['g-recaptcha-response']){
      $this->validate(request(), [
        'g-recaptcha-response' => 'required|captcha'
    ]);
      // $to_name = "vrpatriot";
      // $to_email = "vrpatriot@rusinnovations.com";
      // $data = array(
      //     'contact_email' => request('contact_email'),
      //     'phone' => request('phone'),
      //     'text_contact' => request('text_contact'),
      // );
      //   \Mail::send('email.mailcontact', $data, function($message) use ($data, $to_email, $to_name)
      //   {
      //     $message->from($to_email, $data['contact_email'],$data['phone'], $data['text_contact']);
      //     $message->to($to_email)->subject('Message from site');
      //  });
  
      back()->with('message_1', 'Ваш вопрос отправлен куратору конкурса и в ближайшее время мы свяжемся с вами, чтобы ответить на него!');
      return redirect('/')->with('message', 'СПАСИБО ЗА ВАШУ АКТИВНОСТЬ И ИНТЕРЕС!');
    }else{
      back()->with('message_1', 'Проверьте правильность заполненных данных и отправьте форму еще раз!');
      return redirect('/')->with('message', 'Ваш вопрос не был отправлен !');
    }
    }
  public function main_form(Request $request)
  {
    $items = MainForm::create($request->all());
    back()->with('message_1', 'Вы зарегистрированы');
    return redirect('/')->with('message', 'Большое спасибо!');
    // if($request['g-recaptcha-response']){
    //   $this->validate(request(), [
    //     'g-recaptcha-response' => 'required|captcha'
    // ]);
    // if ($request->hasFile('photos')) {

    //   $items = MainForm::create($request->all());

    //   foreach ($request->photos as $photo) {
    //     $photo->store('public/upload');
    //     FileName::create([
    //       'fileid' => $items->id,
    //       'filename' => $photo->store('upload'),
    //     ]);
    //   }
    //   $to_email='vrpatriot@rusinnovations.com';
    //   $to_name=env('MAIL_FROM_NAME');
    //   $data = array(
    //       'email' => request('email'),
    //   );
    //     \Mail::send('email.mailcontactuser', $data, function($message) use ($data,$to_email, $to_name)
    //     {
    //       $message->from($to_email);
    //       $message->to($data['email'], $to_name)->subject('Уведомление о получении проекта');
    //    });


    //   back()->with('message_1', 'Ожидайте письмо-подтверждение о получении проекта на E-mail, указанный в заявке');
    //   return redirect('/')->with('message', 'ВАША ЗАЯВКА ОТПРАВЛЕНА!');
    // } else {
    //   $items = MainForm::create($request->all());
    //   $to_email='vrpatriot@rusinnovations.com';
    //   $to_name=env('MAIL_FROM_NAME');
    //   $data = array(
    //       'email' => request('email'),
    //   );
    //     \Mail::send('email.mailcontactuser', $data, function($message) use ($data,$to_email, $to_name)
    //     {
    //       $message->from($to_email);
    //       $message->to($data['email'], $to_name)->subject('Уведомление о получении проекта');
    //    });
    //   back()->with('message_1', 'Ожидайте письмо-подтверждение о получении проекта на E-mail, указанный в заявке');
    //   return redirect('/')->with('message', 'ВАША ЗАЯВКА ОТПРАВЛЕНА!');
    // }
    // }else{
    //   back()->with('message_1', 'Проверка капчи не прошла !');
    //   return redirect('/')->with('message', 'Ваш проект не был отправлен ! Пройдите google Captcha');
    // }
  }

  public function update_main_form(Request $request)
  {
    return "oks";
  }
  public function excel_export()
    {
        return Excel::download(new ProjectExport, 'projects.xlsx');
    }
}
