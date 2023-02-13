<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class EncuentrameMailable extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = '¡¡Se ha perdido una mascota!!';
    public $subtitle = 'Ayudanos a encontrar a ';
    public $nombre_mascota = '';
    public $descripcion = '';
    public $imagen_mascota = '';
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($nombre_mascota, $descripcion, $profileImage)
    {
        $this->nombre_mascota = $nombre_mascota;
        $this->descripcion = $descripcion;
        $this->imagen_mascota = $profileImage;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('email.encuentrame');
    }
}
