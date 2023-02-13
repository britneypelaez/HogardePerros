<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactanosMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = 'Solicitud de Información';
    public $subtitle = 'Contáctanos';
    public $nombre = '';
    public $celular = '';
    public $email = '';
    public $comentario = '';
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nombre, $celular, $email, $comentario)
    {
        $this->nombre = $nombre;
        $this->celular = $celular;
        $this->email = $email;
        $this->comentario = $comentario;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('email.contactanos');
    }
}
