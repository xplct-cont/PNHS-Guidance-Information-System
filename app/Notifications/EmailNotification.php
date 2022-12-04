<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\Meeting;
use App\Http\Controllers\HomeController;
use DB;
use Carbon;


class EmailNotification extends Notification 
{
    use Queueable;
 
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct()
    {
   
       
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
          
        //   $meetings = DB::table('meetings')->select('title','start','end')->first();
           
             $meetings = DB::table('meetings')->get();
             foreach ($meetings as $meeting) {
                # code...
               

        return (new MailMessage)
                     
                    ->greeting('Good Day! Kindly read the scheduled meeting.')
                    ->line('Scheduled Meeting Title: '.$meeting->title_of_the_meeting)
                    ->line(' Location: '.$meeting->location_of_the_meeting)
                    ->line('Date and Time: ' . Carbon\Carbon::parse($meeting->meeting_date_time)->format('F d,  Y - g:i A'))
                    ->line('Thank you!');
    }
        
}

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            
        ];
    }
}
