<?php

namespace App\Enum;

enum ReservationStatusEnum: string
{
    case CONFIRMADO = 'Confirmado';
    case AGUARDANDO_CONFIRMACAO = 'Aguardando Confirmação';
    case CANCELADO = 'Cancelado';
}
