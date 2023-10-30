<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class ExportarController extends BaseController
{
    public function exportar(){
        return view('exportaciones/exportar');
    }

    public function exportar_csv(){
        if (isset($_POST['submit'])){
            chdir('D:\xampp\mysql\bin');
            $command = 'mysqldump -h localhost -u root estudiantec > D:\Downloads\respaldo_estudiantec.csv';
            exec($command);
            return redirect('exportaciones/exportar', 'refresh');
        }else{return redirect('exportaciones/exportar', 'refresh');}

    }

    public function exportar_xml(){
        if (isset($_POST['submit'])){
            chdir('D:\xampp\mysql\bin');
            $command = 'mysqldump -h localhost -u root estudiantec > D:\Downloads\respaldo_estudiantec.xml';
            exec($command);
            return redirect('exportaciones/exportar', 'refresh');
        }else{return redirect('exportaciones/exportar', 'refresh');}
    }

    public function exportar_sql(){
        if (isset($_POST['submit'])){
        // Nota: se tiene que acceder a donde se tenga el programa mysqldump.exe
        // chdir('C:/Program Files/MySQL/MySQL Workbench 8.0');
        chdir('D:\xampp\mysql\bin');
        //hay dos opciones: 1.-te conectas al server con tu usuario con contraseña vacia
        $command = 'mysqldump -h localhost -u root estudiantec > D:\Downloads\respaldo_estudiantec.sql';
        //O 2.- te conectas al server con un usuario con contraseña
        // $command = 'mysqldump -h localhost -u root -pContraseña estudiantec > D:\Downloads\estudiantec2.sql';
        //No dejes espacios en el comando -p tienen que estar pegado a la contraseña -pContraseña
        //Esto para que el servidor no se quede esperando la contraseña, de lo contrario esperara para siempre
        //y no escribira nada, 2 horas para esto aaaaaaaaaaaaaaaaaaaaaaaaaa :3
        exec($command);
        return redirect('exportaciones/exportar', 'refresh');
        }else{return redirect('exportaciones/exportar', 'refresh');}
    }
}