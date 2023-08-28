<?php

namespace App\Http\Controllers;

use App\Models\Config;
use App\Models\Mcard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Termwin\Raw;

class HomeController extends Controller
{
    public function showAllGraphics() //Importar todos os gráficos para exibição
    {
        $mcardChartData = $this->getGraphicsMCard();
        $eventsChartData = $this->getGraphicsEvents();
        $usersChartData = $this->getGraphicsUsers();
        $logo = Config::pluck('logo');

    return view('home', compact('mcardChartData', 'eventsChartData','usersChartData','logo'));
    }

    private function getGraphicsMCard()
    {
        $chartData = []; // Inicializa um array vazio para os dados do gráfico

        $typesCounts = DB::table('mcard_types') //Seleciona mcard
            ->select('type', DB::raw('COUNT(*) as count')) //Conta quantos tipos
            ->groupBy('type') // Qual grupo
            ->get(); //puxa

        foreach ($typesCounts as $typeCount) {
            $chartData[] = [$typeCount->type, (int) $typeCount->count];
        }//Até quanto puder, preenche o array que criei com o nome do tipo e a quantidade

        return $chartData;
    }

    private function getGraphicsEvents()
    {
        $chartData = [];

        $eventDateCounts = DB::table('events')
            ->select(DB::raw('YEAR(date) as year, MONTH(date) as month'), DB::raw('COUNT(*) as event_count'))
            ->groupBy('year', 'month')
            ->orderBy('year', 'asc')
            ->orderBy('month', 'asc')
            ->get();

        $monthNames = [
            "Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho",
            "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"
         ];


        $chartData = array_fill(0, 12, 0);

        foreach ($eventDateCounts as $event) {
            $chartData[$event->month - 1] = (int) $event->event_count;
        }


        $completeChartData = [];
        foreach ($monthNames as $monthIndex => $monthName) {
            $completeChartData[] = [$monthName, $chartData[$monthIndex]];
        }
       //dd($completeChartData);

        //return $completeChartData;
        return $chartData;

    }

    private function getGraphicsUsers()
    {
        $chartData = [];

        $usersCountsByMonth = DB::table('users')
            ->select(DB::raw('YEAR(created_at) as year, MONTH(created_at) as month'), DB::raw('COUNT(*) as user_count'))
            ->groupBy('year', 'month')
            ->orderBy('year', 'asc')
            ->orderBy('month', 'asc')
            ->get();

        foreach ($usersCountsByMonth as $userCount) {
            $chartData[] = [sprintf('%04d-%02d', $userCount->year, $userCount->month), (int) $userCount->user_count];
        }

        return $chartData;
    }


}
