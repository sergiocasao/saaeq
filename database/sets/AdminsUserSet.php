<?php

use Illuminate\Console\Command;

use App\User;
use App\Role;

class AdminsUserSet extends CltvoSet
{
    /**
     * Etiqueta a desplegarse par ainformar final
     */
    protected $label =  "Admin Users";

    /**
     * nombre de la clase a ser sembrada
     */
    protected function CltvoGetModelClass(){
        return "";
    }

    /**
     * valores a ser introducidos en la base
     */
    protected function CltvoGetItems(){
        return [
            [
                [
                    // 'name'              => '',
                    // 'first_name'        => '',
                    // 'last_name'         => '',
                    // 'email'             => '',
                    // 'password'          => '',
                    // 'active'            => true
                ],
            ]

        ];
    }

    /**
     * metodo de introduccion de valores
     * @param array   $model_args argumentos que definiran el
     * @param Command $comand     comando actual
     */
    protected function CltvoSower(array $model_args, Command $comand){

        foreach ($model_args as $args) {

            $user = User::where(["name" => $args["name"]  ])->orWhere(["email" => $args["email"]  ])->get()->first();

            if(!$user){
                $user = User::CltvoCreate($args);
                if ($user) {
                    $comand->line('<info>'.$args["name"].':</info>'." successfully set.");
                }else{
                    $comand->line('<error>'.$args["name"].':</error>'." not successfully set.");
                    return;
                }
            }else {
                $comand->line('<comment>'.$args["name"].':</comment>'." previously set.");
            }

            $admin = Role::getAdmin();

            if ($admin) {
                if (!$user->roles()->get()->find($admin) ) {
                    if ($user->roles()->save($admin)) {
                        $comand->line('<info>'.$admin->label.':</info>'." successfully associated with ".$args["name"].".");
                    }else{
                        $comand->line('<error>'.$admin->label.':</error>'." not successfully associated with ".$args["name"].".");
                        return;
                    }
                }else {
                    $comand->line('<comment>'.$admin->label.':</comment>'." role previously associate with ".$args["name"].".");
                }

            }else{
                $comand->error("Role not exist.");
                return;
            }

        }

    }

}
