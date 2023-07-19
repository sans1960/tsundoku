<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Acte;

class CalendarController extends Controller
{
    public function index(){
      $month = date("Y-m");
      $data = $this->calendar_month($month);
      $mes = $data['month'];
      // obtener mes en catala
      $mescatala = $this->catala_month($mes);
      $mes = $data['month'];

      return view("front.calendari",[
        'data' => $data,
        'mes' => $mes,
        'mescatala' => $mescatala
      ]);
    }
       public function index_month($month){

      $data = $this->calendar_month($month);
      $mes = $data['month'];
      // obtener mes en espanol
      $mescatala = $this->catala_month($mes);
      $mes = $data['month'];

      return view("front.calendari",[
        'data' => $data,
        'mes' => $mes,
        'mescatala' => $mescatala
      ]);

    }
    public static function calendar_month($month){
      //$mes = date("Y-m");
      $mes = $month;
      //sacar el ultimo de dia del mes
      $daylast =  date("Y-m-d", strtotime("last day of ".$mes));
      //sacar el dia de dia del mes
      $fecha      =  date("Y-m-d", strtotime("first day of ".$mes));
      $daysmonth  =  date("d", strtotime($fecha));
      $montmonth  =  date("m", strtotime($fecha));
      $yearmonth  =  date("Y", strtotime($fecha));
      // sacar el lunes de la primera semana
      $nuevaFecha = mktime(0,0,0,$montmonth,$daysmonth,$yearmonth);
      $diaDeLaSemana = date("w", $nuevaFecha);
      $nuevaFecha = $nuevaFecha - ($diaDeLaSemana*24*3600); //Restar los segundos totales de los dias transcurridos de la semana
      $dateini = date ("Y-m-d",$nuevaFecha);
      //$dateini = date("Y-m-d",strtotime($dateini."+ 1 day"));
      // numero de primer semana del mes
      $semana1 = date("W",strtotime($fecha));
      // numero de ultima semana del mes
      $semana2 = date("W",strtotime($daylast));
      // semana todal del mes
      // en caso si es diciembre
      if (date("m", strtotime($mes))==12) {
          $semana = 5;
      }
      else {
        $semana = ($semana2-$semana1)+1;
      }
      // semana todal del mes
      $datafecha = $dateini;
      $calendario = array();
      $iweek = 0;
      while ($iweek < $semana):
          $iweek++;
          //echo "Semana $iweek <br>";
          //
          $weekdata = [];
          for ($iday=0; $iday < 7 ; $iday++){
            // code...
            $datafecha = date("Y-m-d",strtotime($datafecha."+ 1 day"));
            $datanew['mes'] = date("M", strtotime($datafecha));
            $datanew['dia'] = date("d", strtotime($datafecha));
            $datanew['fecha'] = $datafecha;
            //AGREGAR CONSULTAS EVENTO
           $datanew['evento'] = Acte::where("data",$datafecha)->get();
            array_push($weekdata,$datanew);
          }
          $dataweek['semana'] = $iweek;
          $dataweek['datos'] = $weekdata;
          //$datafecha['horario'] = $datahorario;
          array_push($calendario,$dataweek);
      endwhile;
      $nextmonth = date("Y-M",strtotime($mes."+ 1 month"));
      $lastmonth = date("Y-M",strtotime($mes."- 1 month"));
      $month = date("M",strtotime($mes));
      $yearmonth = date("Y",strtotime($mes));
      //$month = date("M",strtotime("2019-03"));
      $data = array(
        'next' => $nextmonth,
        'month'=> $month,
        'year' => $yearmonth,
        'last' => $lastmonth,
        'calendar' => $calendario,
      );
      return $data;
    }





    public static function catala_month($month)
    {

        $mes = $month;
        if ($month=="Jan") {
          $mes = "Gener";
        }
        elseif ($month=="Feb")  {
          $mes = "Febrer";
        }
        elseif ($month=="Mar")  {
          $mes = "Març";
        }
        elseif ($month=="Apr") {
          $mes = "Abril";
        }
        elseif ($month=="May") {
          $mes = "Maig";
        }
        elseif ($month=="Jun") {
          $mes = "Juny";
        }
        elseif ($month=="Jul") {
          $mes = "Juliol";
        }
        elseif ($month=="Aug") {
          $mes = "Agost";
        }
        elseif ($month=="Sep") {
          $mes = "Setembre";
        }
        elseif ($month=="Oct") {
          $mes = "Octubre";
        }
        elseif ($month=="Nov") {
          $mes = "Novembre";
        }
        elseif ($month=="Dec") {
          $mes = "Decembre";
        }
        else {
          $mes = $month;
        }
        return $mes;
    }
}
