<?php

namespace App\Http\Resources\V1;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{

    // public static $wrap = 'mpdorder';
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $colors = [
            '
            <path d="M2.25 2.25a.75.75 0 000 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 00-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 000-1.5H5.378A2.25 2.25 0 017.5 15h11.218a.75.75 0 00.674-.421 60.358 60.358 0 002.96-7.228.75.75 0 00-.525-.965A60.864 60.864 0 005.68 4.509l-.232-.867A1.875 1.875 0 003.636 2.25H2.25zM3.75 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM16.5 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" />
            ',
            '
            <path d="M2.25 2.25a.75.75 0 000 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 00-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 000-1.5H5.378A2.25 2.25 0 017.5 15h11.218a.75.75 0 00.674-.421 60.358 60.358 0 002.96-7.228.75.75 0 00-.525-.965A60.864 60.864 0 005.68 4.509l-.232-.867A1.875 1.875 0 003.636 2.25H2.25zM3.75 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM16.5 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" />
            ',
            '
            <path d="M2.25 2.25a.75.75 0 000 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 00-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 000-1.5H5.378A2.25 2.25 0 017.5 15h11.218a.75.75 0 00.674-.421 60.358 60.358 0 002.96-7.228.75.75 0 00-.525-.965A60.864 60.864 0 005.68 4.509l-.232-.867A1.875 1.875 0 003.636 2.25H2.25zM3.75 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0zM16.5 20.25a1.5 1.5 0 113 0 1.5 1.5 0 01-3 0z" />
            '
        ];
        $estatus = ['Borrador', 'Cotización', 'Procesando', 'Completado', 'Cancelado', '--'];
        $sales_in = ['', 'WhatsApp', 'Tienda en línea', 'Mercado Libre', 'Amazón',];
        $hoy = Carbon::now();
            $collection1 = Carbon::now();
            $collection2 = $this->created_at;
            $difference = $collection1->diff($collection2);



            $date1 = $this->created_at;
            $date2 = Carbon::now();

            $diff = $date2->diff($date1)->days;
            $weekends = floor($diff / 7) * 2;
            $remainingDays = $diff - $weekends;
            $startDayOfWeek = $date1->format('d/m/Y h:i A');
            $endDayOfWeek = $date2->format('d/m/Y h:i A');

            if ($startDayOfWeek >= 6) {
                $weekends--;
            }

            if ($endDayOfWeek <= 5 && $diff > 6) {
                $weekends--;
            }

            $totalDays = $remainingDays - $weekends;

            /// INICIO Otra opcion RD
            $fecha1 = $this->created_at; // fecha de inicio
            $fecha2 = Carbon::now(); // fecha de fin

            // Convierte las fechas en formato Unix
            $fecha1_unix = strtotime($fecha1);
            $fecha2_unix = strtotime($fecha2);

            $dias_habiles = 0;

            // Itera a través de cada día entre las dos fechas
            for ($i = $fecha1_unix; $i <= $fecha2_unix; $i += 86400) {
            $dia_semana = date("N", $i); // Obtiene el número del día de la semana (1=lunes, 2=martes, etc.)

            // Si el día de la semana es de lunes a viernes, incrementa la cantidad de días hábiles
            if ($dia_semana <= 5) {
                $dias_habiles++;
            }
            }

            // Imprime la cantidad de días hábiles entre las dos fechas
            $sinfinx = $dias_habiles-1;

            //FIN /// Otra opcion RD

        // return parent::toArray($request);
        //Para crear un matriz de llamado, así no llamar toda la información
        return[
            'id'                => $this->id,
            // 'employee_id'       => $this->employee_id,
            // 'fullname'          => $this->user->name,
            'fullname'          => ucfirst($this->user->name) . ' ' . ucfirst($this->user->last_name),
            'sale_in'          => $sales_in[$this->sale_in - 0],
            //'my_color'          => $colors[$this->my_color - 0],
            // 'user_id'           => $this->user_id,
            'num_order'         => $this->num_order,
            'items'             => $this->items,
            // 'status'            => $this->status,
            'status'          =>  $estatus[$this->status - 0],
            // 'created_at'        => $this->created_at,
            'created_at'        => $this->created_at->format('d/m/Y h:i A'),
            'delivery_date'     => $this->delivery_date,
            'sinfines'          => $totalDays,
            'sinfinxz'           => $sinfinx,
            'differencex'        =>$difference, // Diferencia de días contando los fines de semana
            'total'             => $this->total,
            // return `$${Number(row.total).toFixed(2)}`;
            // 'hola'              => ($this->created_at) / ($this->created_at),

        ];

    }
}
