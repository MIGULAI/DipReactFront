<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\group;
use App\Models\scientific_degree;
use App\Models\scientific_rank;
use App\Models\organization;
use App\Models\department;
use App\Models\place;
use App\Models\autor;
use App\Models\User;
use App\Models\language;
use App\Models\type;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class DefaultController extends Controller
{
    public function default_start(){
        $groups=DB::table('groups')->get();
        if(count($groups->all()) == 0){
            User::create([
                'name' => 'qwerty',
                'email' => 'vitukivan05@gmail.com',
                'password' => Hash::make('qwerty1234'),
            ]);

            $group1 = new group();
            $group2 = new group();
            $group3 = new group();
            $group4 = new group();
            $group5 = new group();
            $group6 = new group();
            $group7 = new group();
            $group8 = new group();

            $sd1 = new scientific_degree();
            $sd2 = new scientific_degree();
            $sd3 = new scientific_degree();
            $sd4 = new scientific_degree();
            $sd5 = new scientific_degree();

            $sr1 = new scientific_rank();
            $sr2 = new scientific_rank();
            $sr3 = new scientific_rank();

            $org1 = new organization();
            $org2 = new organization();
            $org3 = new organization();

            $dep1 = new department();
            $dep2 = new department();
            $dep3 = new department();
            $dep4 = new department();

            $place1 = new place();
            $place2 = new place();
            $place3 = new place();
            $place4 = new place();
            $place5 = new place();

            $group1->Group = 'none';
            $group2->Group = 'КН-18-1';
            $group3->Group = 'КН-19-1';
            $group4->Group = 'КН-20-1';
            $group5->Group = 'КН-21-1';
            $group6->Group = 'АКІТ-18-2';
            $group7->Group = 'АКІТ-21-2с';
            $group8->Group = 'КІП-21-2м';

            $sd1->scientific_degree = 'none';
            $sd2->scientific_degree = 'д.пед.н.';
            $sd3->scientific_degree = 'д.техн.н.';
            $sd4->scientific_degree = 'к.пед.н.';
            $sd5->scientific_degree = 'к.техн.н.';

            $sr1->scientific_rank = 'none';
            $sr2->scientific_rank = 'доцент';
            $sr3->scientific_rank = 'професор';

            $org1->organization = 'none';
            $org1->organization_full_name = 'none';
            $org2->organization = 'КрНУ';
            $org2->organization_full_name = 'Кременчуцький національний університет імені Михайла Остроградського';
            $org3->organization = 'ХНУРЕ';
            $org3->organization_full_name = 'Харківський національний університет радіоелектроніки';

            $dep1->organization = '1';
            $dep1->department = 'none';
            $dep1->department_full_name = 'none';
            
            $dep2->organization = '2';
            $dep2->department = 'Кафедра АІС';
            $dep2->department_full_name = 'Кафедра автоматизації та інформаційних систем';
            
            $dep3->organization = '3';
            $dep3->department = 'ІО центр';
            $dep3->department_full_name = 'Інформаційно-обчислювальний центр';
               
            $dep4->organization = '2';
            $dep4->department = 'Кафедра ІКС';
            $dep4->department_full_name = 'Кафедра інтелектуальних комп’ютерних систем';
            
            $place1->place = 'студент';
            $place2->place = 'аспірант';
            $place3->place = 'старший викладач';
            $place4->place = 'доцент';
            $place5->place = 'професор';

            $group1->save();
            $group2->save();
            $group3->save();
            $group4->save();
            $group5->save();
            $group6->save();
            $group7->save();
            $group8->save();

            $sd1->save();
            $sd2->save();
            $sd3->save();
            $sd4->save();
            $sd5->save();

            $sr1->save();
            $sr2->save();
            $sr3->save();

            $org1->save();
            $org2->save();
            $org3->save();

            $dep1->save();
            $dep2->save();
            $dep3->save();
            $dep4->save();

            $place1->save();
            $place2->save();
            $place3->save();
            $place4->save();
            $place5->save();

            $autor1 = new autor();
            $autor2 = new autor();
            $autor3 = new autor();
            $autor4 = new autor();
            $autor5 = new autor();
            $autor6 = new autor();
            $autor7 = new autor();
            $autor8 = new autor();
            $autor9 = new autor();
            $autor10 = new autor();
            $autor11 = new autor();
            $autor12 = new autor();
            $autor13 = new autor();
            $autor14 = new autor();
            $autor15 = new autor();
            $autor16 = new autor();
            $autor17 = new autor();
            $autor18 = new autor();
            $autor19 = new autor();
            $autor20 = new autor();
            $autor21 = new autor();

            $autor1->Last_Name = 'Бельська';
            $autor1->First_Name = 'Вікторія';
            $autor1->Patronic = 'Юріївна';
            $autor1->Ukr_PIP = 'Бельська В. Ю.';

            $autor2->Last_Name = 'Бурдільна';
            $autor2->First_Name = 'Євгенія';
            $autor2->Patronic = 'Володимирівна';
            $autor2->Ukr_PIP = 'Бурдільна Є. В.';

            $autor3->Last_Name = 'Васильєв';
            $autor3->First_Name = 'Денис';
            $autor3->Patronic = 'Олегович';
            $autor3->Ukr_PIP = 'Васильєв Д. О.';

            $autor4->Last_Name = 'Горлова';
            $autor4->First_Name = 'Тетяна';
            $autor4->Patronic = 'Валентинівна';
            $autor4->Ukr_PIP = 'Горлова Т. В.';

            $autor5->Last_Name = 'Дернова';
            $autor5->First_Name = 'Майя';
            $autor5->Patronic = 'Григорівна';
            $autor5->Ukr_PIP = 'Дернова М. Г.';

            $autor6->Last_Name = 'Істоміна';
            $autor6->First_Name = 'Наталія';
            $autor6->Patronic = 'Миколаївна';
            $autor6->Ukr_PIP = 'Істоміна Н. М.';

            $autor7->Last_Name = 'Коваль';
            $autor7->First_Name = 'Світлана';
            $autor7->Patronic = 'Станіславівна';
            $autor7->Ukr_PIP = 'Коваль С. С.';

            $autor8->Last_Name = 'Когдась';
            $autor8->First_Name = 'Максим';
            $autor8->Patronic = 'Григорович';
            $autor8->Ukr_PIP = 'Когдась М. Г.';

            $autor9->Last_Name = 'Конох';
            $autor9->First_Name = 'Ігор';
            $autor9->Patronic = 'Сергійович';
            $autor9->Ukr_PIP = 'Конох І. С.';

            $autor10->Last_Name = 'Король';
            $autor10->First_Name = 'Катерина';
            $autor10->Patronic = 'Сергіївна';
            $autor10->Ukr_PIP = 'К. К. С.';

            $autor11->Last_Name = 'Ломонос';
            $autor11->First_Name = 'Андрій';
            $autor11->Patronic = 'Іванович';
            $autor11->Ukr_PIP = 'Король А. І.';

            $autor12->Last_Name = 'Луценко';
            $autor12->First_Name = 'І.';
            $autor12->Patronic = 'А.';
            $autor12->Ukr_PIP = 'Луценко І. А.';

            $autor13->Last_Name = 'Найда';
            $autor13->First_Name = 'Віталій';
            $autor13->Patronic = 'Володимирович';
            $autor13->Ukr_PIP = 'Найда В. В.';

            $autor14->Last_Name = 'Нікітіна';
            $autor14->First_Name = 'Альона';
            $autor14->Patronic = 'Вікторівна';
            $autor14->Ukr_PIP = 'Нікітіна А. В.';

            $autor15->Last_Name = 'Оксанич';
            $autor15->First_Name = 'Анатолій';
            $autor15->Patronic = 'Петрович';
            $autor15->Ukr_PIP = 'Оксанич А. П.';

            $autor16->Last_Name = 'Оксанич';
            $autor16->First_Name = 'Ірина';
            $autor16->Patronic = 'Григорівна';
            $autor16->Ukr_PIP = 'Оксанич І. Г.';

            $autor17->Last_Name = 'Притчин';
            $autor17->First_Name = 'Сергій';
            $autor17->Patronic = 'Емільович';
            $autor17->Ukr_PIP = 'Притчин С. Е.';

            $autor18->Last_Name = 'Палагін';
            $autor18->First_Name = 'Віктор';
            $autor18->Patronic = 'Андрійович';
            $autor18->Ukr_PIP = 'Палагін В. А.';

            $autor19->Last_Name = 'Рилова';
            $autor19->First_Name = 'Наталя';
            $autor19->Patronic = 'Вікторівна';
            $autor19->Ukr_PIP = 'Рилова Н. В.';

            $autor20->Last_Name = 'Самойлов';
            $autor20->First_Name = 'Андрій';
            $autor20->Patronic = 'Миколайович';
            $autor20->Ukr_PIP = 'Самойлов А. М.';

            $autor21->Last_Name = 'Шевченко';
            $autor21->First_Name = 'Ігор';
            $autor21->Patronic = 'Васильович';
            $autor21->Ukr_PIP = 'Шевченко І. В.';

            $autor1->Planing_Status = true;
            $autor2->Planing_Status = true;
            $autor3->Planing_Status = true;
            $autor4->Planing_Status = true;
            $autor5->Planing_Status = true;
            $autor6->Planing_Status = true;
            $autor7->Planing_Status = true;
            $autor8->Planing_Status = true;
            $autor9->Planing_Status = true;
            $autor10->Planing_Status = true;
            $autor11->Planing_Status = true;
            $autor12->Planing_Status = true;
            $autor13->Planing_Status = true;
            $autor14->Planing_Status = true;
            $autor15->Planing_Status = true;
            $autor16->Planing_Status = true;
            $autor17->Planing_Status = true;
            $autor18->Planing_Status = true;
            $autor19->Planing_Status = true;
            $autor20->Planing_Status = true;
            $autor21->Planing_Status = true;

            $autor1->Position = '3';
            $autor2->Position = '3';
            $autor3->Position = '3';
            $autor4->Position = '3';
            $autor5->Position = '5';
            $autor6->Position = '4';
            $autor7->Position = '4';
            $autor8->Position = '4';
            $autor9->Position = '5';
            $autor10->Position = '2';
            $autor11->Position = '4';
            $autor12->Position = '5';
            $autor13->Position = '3';
            $autor14->Position = '4';
            $autor15->Position = '5';
            $autor16->Position = '5';
            $autor17->Position = '5';
            $autor18->Position = '5';
            $autor19->Position = '3';
            $autor20->Position = '3';
            $autor21->Position = '5';

            $autor1->Scientific_Degree = '1';
            $autor2->Scientific_Degree = '1';
            $autor3->Scientific_Degree = '1';
            $autor4->Scientific_Degree = '1';
            $autor5->Scientific_Degree = '2';
            $autor6->Scientific_Degree = '5';
            $autor7->Scientific_Degree = '5';
            $autor8->Scientific_Degree = '5';
            $autor9->Scientific_Degree = '3';
            $autor10->Scientific_Degree = '1';
            $autor11->Scientific_Degree = '5';
            $autor12->Scientific_Degree = '3';
            $autor13->Scientific_Degree = '5';
            $autor14->Scientific_Degree = '5';
            $autor15->Scientific_Degree = '3';
            $autor16->Scientific_Degree = '3';
            $autor17->Scientific_Degree = '3';
            $autor18->Scientific_Degree = '3';
            $autor19->Scientific_Degree = '5';
            $autor20->Scientific_Degree = '1';
            $autor21->Scientific_Degree = '3';

            $autor1->Scientific_Rank = '1';
            $autor2->Scientific_Rank = '1';
            $autor3->Scientific_Rank = '1';
            $autor4->Scientific_Rank = '1';
            $autor5->Scientific_Rank = '2';
            $autor6->Scientific_Rank = '1';
            $autor7->Scientific_Rank = '2';
            $autor8->Scientific_Rank = '2';
            $autor9->Scientific_Rank = '2';
            $autor10->Scientific_Rank = '1';
            $autor11->Scientific_Rank = '2';
            $autor12->Scientific_Rank = '3';
            $autor13->Scientific_Rank = '1';
            $autor14->Scientific_Rank = '1';
            $autor15->Scientific_Rank = '3';
            $autor16->Scientific_Rank = '2';
            $autor17->Scientific_Rank = '3';
            $autor18->Scientific_Rank = '3';
            $autor19->Scientific_Rank = '1';
            $autor20->Scientific_Rank = '1';
            $autor21->Scientific_Rank = '3';

            $autor1->save();
            $autor2->save();
            $autor3->save();
            $autor4->save();
            $autor5->save();
            $autor6->save();
            $autor7->save();
            $autor8->save();
            $autor9->save();
            $autor10->save();
            $autor11->save();
            $autor12->save();
            $autor13->save();
            $autor14->save();
            $autor15->save();
            $autor16->save();
            $autor17->save();
            $autor18->save();
            $autor19->save();
            $autor20->save();
            $autor21->save();

            $language1 = new language();
            $language2 = new language();
            $language3 = new language();

            $language1->Language = "UKR";
            $language2->Language = "RUS";
            $language3->Language = "ENG";

            $language1->save();
            $language2->save();
            $language3->save();

            $type1 = new type();
            $type2 = new type();
            $type3 = new type();
            $type4 = new type();

            $type1->Type = "Теза (ТДК)";
            $type2->Type = "Фахова стаття (СТ)";
            $type3->Type = "Scopus (SW)";
            $type4->Type = "Посібник (ПМ)";

            $type1->save();
            $type2->save();
            $type3->save();
            $type4->save();

        }
        
        

       
    }
}
