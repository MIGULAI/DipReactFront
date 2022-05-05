<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\plan;
use App\Models\autor;
use App\Models\plan_contr;
use App\Models\fact_publ;

use DateTime;
use App\Http\Controllers\DefaultController;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class PlaningController extends Controller
{
    public function TakePlaneDefaultStart(){
        $groups=DB::table('groups')->get();
        if(count($groups->all()) == 0){
            DefaultController::default_start();
            $bigPlanArray =  $this->SelectPlaning();
            
            return  $bigPlanArray;
        }
        else{
            $bigPlanArray =  $this->SelectPlaning();
            return $bigPlanArray;
        }
    }

    public function SelectPlaning(){

        $date_now = date('Y-m-d');
        $year_now = date('Y');
        $start_year_array = plan::select('year_start')->distinct()->get();
        $end_year_array = plan::select('year_end')->distinct()->get();
        
            $plan = plan::all()->first();  
            $autors = autor::where('Planing_Status' , '=' , '1')->get();  
            if(!$plan){
                $pubDate = new DateTime($date_now);
                $controleDate = new DateTime($pubDate->format('Y') .  '-08-31');
                if($pubDate <= $controleDate){
                    $year_now -=1;
                    //dd($year_now);
                    $year = $year_now;;
                foreach($autors as $autor){
                        $yearStart = $year ;
                        $yearEnd = $year + 1 ;
                        $plan_autor = new plan();
                        $plan_contr_autor = new plan_contr();
                        $fact_plan_contr = new fact_publ();
                        $plan_autor->year_start = $yearStart;
                        $plan_contr_autor->year_start = $yearStart;
                        $fact_plan_contr->year_start = $yearStart;
                        $plan_autor->year_end = $yearEnd;
                        $plan_contr_autor->year_end = $yearEnd;
                        $fact_plan_contr->year_end = $yearEnd;
                        $plan_autor->id_autor = $autor->id;
                        $plan_contr_autor->id_autor = $autor->id;
                        $fact_plan_contr->id_autor = $autor->id;
                        $plan_autor->theses = 1;
                        $plan_contr_autor->theses = 1;
                        $fact_plan_contr->theses = 0;
                        $plan_autor->professional_articles = 1;
                        $plan_contr_autor->professional_articles = 1;
                        $fact_plan_contr->professional_articles = 0;

                        if($yearEnd % 3 == 0){
                            $plan_autor->scopus = 1; 
                            $plan_contr_autor->scopus = 1;
                            $fact_plan_contr->scopus = 0;
                        }else{
                            $plan_autor->scopus = 0; 
                            $plan_contr_autor->scopus = 0;
                            $fact_plan_contr->scopus = 0;
                        }

                        if($yearEnd % 5 == 0){
                            $plan_autor->manuals = 1; 
                            $plan_contr_autor->manuals = 1;
                            $fact_plan_contr->manuals = 0;
                        }else{
                            $plan_autor->manuals = 0; 
                            $plan_contr_autor->manuals = 0;
                            $fact_plan_contr->manuals = 0;
                        }
                        $plan_autor->status = false;
                        $plan_autor->save();
                        $plan_contr_autor->plan_id = $plan_autor->id;
                        $fact_plan_contr->plan_id = $plan_autor->id;
                        $plan_contr_autor->save();
                        $fact_plan_contr->save();
                    
                }
                return  ['autors' => DB::table('autors')->where('Planing_Status' ,'1')->get(),
                                                'plans' => DB::table('plans')->where('year_start' , $year)->get(),
                                                'start_year_array' => $start_year_array,
                                                'end_year_array' => $end_year_array,
                                                'year_checked' => date('Y')];
                }else{
                    //dd($year_now);
                    $year = $year_now;
                foreach($autors as $autor){
                        $yearStart = $year ;
                        $yearEnd = $year + 1 ;
                        $plan_autor = new plan();
                        $plan_contr_autor = new plan_contr();
                        $fact_plan_contr = new fact_publ();
                        $plan_autor->year_start = $yearStart;
                        $plan_contr_autor->year_start = $yearStart;
                        $fact_plan_contr->year_start = $yearStart;
                        $plan_autor->year_end = $yearEnd;
                        $plan_contr_autor->year_end = $yearEnd;
                        $fact_plan_contr->year_end = $yearEnd;
                        $plan_autor->id_autor = $autor->id;
                        $plan_contr_autor->id_autor = $autor->id;
                        $fact_plan_contr->id_autor = $autor->id;
                        $plan_autor->theses = 1;
                        $plan_contr_autor->theses = 1;
                        $fact_plan_contr->theses = 0;
                        $plan_autor->professional_articles = 1;
                        $plan_contr_autor->professional_articles = 1;
                        $fact_plan_contr->professional_articles = 0;

                        if($yearEnd % 3 == 0){
                            $plan_autor->scopus = 1; 
                            $plan_contr_autor->scopus = 1;
                            $fact_plan_contr->scopus = 0;
                        }else{
                            $plan_autor->scopus = 0; 
                            $plan_contr_autor->scopus = 0;
                            $fact_plan_contr->scopus = 0;
                        }

                        if($yearEnd % 5 == 0){
                            $plan_autor->manuals = 1; 
                            $plan_contr_autor->manuals = 1;
                            $fact_plan_contr->manuals = 0;
                        }else{
                            $plan_autor->manuals = 0; 
                            $plan_contr_autor->manuals = 0;
                            $fact_plan_contr->manuals = 0;
                        }
                        $plan_autor->status = false;
                        $plan_autor->save();
                        $plan_contr_autor->plan_id = $plan_autor->id;
                        $fact_plan_contr->plan_id = $plan_autor->id;
                        $plan_contr_autor->save();
                        $fact_plan_contr->save();
                    
                    }
                    return  ['autors' => DB::table('autors')->where('Planing_Status' ,'1')->get(),
                                                'plans' => DB::table('plans')->where('year_start' , $year)->get(),
                                                'start_year_array' => $start_year_array,
                                                'end_year_array' => $end_year_array,
                                                'year_checked' => date('Y')];
                }
                

            }else{


                $pubDate = new DateTime($date_now);
                $controleDate = new DateTime($pubDate->format('Y') .  '-08-31');
                if($pubDate <= $controleDate){
                    $year_now -=1;
                    //dd($year_now);
                    $year = $year_now;
                    return ['autors' => DB::table('autors')->where('Planing_Status' ,'1')->get(),
                        'plans' => DB::table('plans')->where('year_start' , $year_now)->get(),
                        'start_year_array' => $start_year_array,
                        'end_year_array' => $end_year_array,
                        'year_checked' => $year_now];

                }else{
                    return ['autors' => DB::table('autors')->where('Planing_Status' ,'1')->get(),
                        'plans' => DB::table('plans')->where('year_start' , $year_now)->get(),
                        'start_year_array' => $start_year_array,
                        'end_year_array' => $end_year_array,
                        'year_checked' => $year_now];
                }
                // $date_now = date('Y-m-d');
                // $year_now = date('Y');
                // $pubDate = new DateTime($date_now);
                // $controleDate = new DateTime($pubDate->format('Y') .  '-08-31');
                // if($pubDate <= $controleDate){
                //     $year_now -=1;
                // }
                // return view('planing' , ['autors' => DB::table('autors')->where('Planing_Status' ,'1')->get(),
                //                         'plans' => DB::table('plans')->where('year_start' , $year_now)->get(),
                //                         'start_year_array' => $start_year_array,
                //                         'end_year_array' => $end_year_array,
                //                         'year_checked' => $year_now]);
                
                
            }

            // return view('planing' , ['autors' => DB::table('autors')->where('Planing_Status' ,'1')->get(),
            //                                     'plans' => DB::table('plans')->where('year_start' , $year_now)->get(),
            //                                     'start_year_array' => $start_year_array,
            //                                     'end_year_array' => $end_year_array,
            //                                     'year_checked' => $year_now]);
        
    }
}
