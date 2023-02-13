<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CampaniaMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = 'Nueva Campaña!!';
    public $subtitle = '! Se ha creado una nueva campaña!';
    public $nombre_campania = '';
    public $descripcion = '';
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nombre_campania, $descripcion)
    {
        $this->nombre_campania = $nombre_campania;
        $this->descripcion = $descripcion;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('email.nueva_campania');
    }
}
