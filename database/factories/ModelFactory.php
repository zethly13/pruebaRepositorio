<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */


$factory->define(App\Usuario::class, function (Faker\Generator $faker)
{

    return [
        
        'doc_identidad' =>$faker->ean8,
        'login' =>$faker->isbn10,
        'clave' =>bcrypt('hola'),
        'apellidos' =>$faker->lastname,
        'nombres' =>$faker->name,
        'sexo' =>$faker->randomElement(['Femenino', 'Masculino']),
        'fecha_nac' =>$faker->date,
        'usuario_activo' =>$faker->randomElement(['Si','No']),
        'inscribir_adm' =>$faker->randomElement(['Si','No']),
        'estilo' =>$faker->randomElement(['Moderno','General']),
        'subir_foto' =>$faker->randomElement(['Si','No']),
        'id_estado_civil' =>$faker->numberBetween($min = 1, $max = 4),
        'id_provincia' =>$faker->numberBetween($min = 1, $max = 47),
        'ciudad_expedido_doc' =>$faker->numberBetween($min = 1, $max = 9),
        'id_tipo_doc_identidad' =>$faker->randomElement(['1']),
        'remember_token' => str_random(10),

    ];
});


$factory->define(App\Usuario_telefono::class, function (Faker\Generator $faker)
{

    return [
        'numero_telefono' =>$faker->ean8,
        'id_usuario' =>$faker->numberBetween($min = 1, $max = 15),
        'id_tipo_telefono' =>$faker->numberBetween($min = 1, $max = 8),
    ];
});

$factory->define(App\Usuario_email::class, function (Faker\Generator $faker)
{

    return [
       
        'email'=>$faker->email,
        'email_activo' =>$faker->randomElement(['SI', 'NO']),
        'id_usuario' =>$faker->numberBetween($min = 1, $max = 15),
        'id_tipo_email' =>$faker->numberBetween($min = 1, $max = 4),
    ];
});

$factory->define(App\Funcion::class, function (Faker\Generator $faker)
{

    return [
        'nombre_funcion' => $faker->randomElement(['Administrador de laboratorios', 'Auxiliar', 'Coordinador', 'Docente','Director academico', 'Docente exclusivo', 'Jefe de departamento']),
        
    ];
});

$factory->define(App\Unidad::class, function (Faker\Generator $faker)
{

    return [
        'nombre_unidad'   => $faker->randomElement(['Contaduria', 'Administracion', 'Comercial', 'Financiera','Economia', 'Oficina educativa', 'Alamacenes', 'DPA']),
        'telefono_unidad' => $faker->phoneNumber,
        'interno_unidad'  => $faker->buildingNumber,
        'correo_unidad'   => $faker->email,
    ];
});



$factory->define(App\Usuario_fotografia::class, function (Faker\Generator $faker)
{

    return [
        'fotografia' =>$faker->randomElement(['000000000.jpg', '123456789.jpg', '564789321.jpg']),
        'fecha_subida' =>$faker->date,
        'valida' =>$faker->randomElement(['SI']),
        'observacion' =>$faker->randomElement(['NINGUNA']),
        'id_usuario' =>$faker->numberBetween($min = 1, $max = 15),
    ];
});

$factory->define(App\Usuario_direccion::class, function (Faker\Generator $faker)
{

    return [
        'nombre_direccion' =>$faker->address,
        'id_usuario' =>$faker->numberBetween($min = 1, $max = 15),
        'id_tipo_direccion' =>$faker->numberBetween($min = 1, $max = 3),
    ];
});


$factory->define(App\Usuario_asignar_sub_rol::class, function (Faker\Generator $faker)
{

    return [
       
        'cod_sis' =>$faker->isbn10,
        'fecha_inicio' =>$faker->date,
        'fecha_fin' =>$faker->date,
        'activo' =>$faker->randomElement(['Si','No']),
        'id_funcion' =>$faker->numberBetween($min = 1, $max = 30),
        'id_sub_rol' =>$faker->numberBetween($min = 1, $max = 7),
        'id_unidad' =>$faker->numberBetween($min = 1, $max = 20),
        'id_usuario' =>$faker->numberBetween($min = 1, $max = 15),
    ];
});
$factory->define(App\Acceso_sub_rol::class, function (Faker\Generator $faker)
{

    return [
        
        'id_sub_acceso'=>$faker->numberBetween($min = 1, $max = 7),
        'id_sub_rol'=>$faker->numberBetween($min = 1, $max = 5),
        
        
    ];
});

$factory->define(App\Gestion::class, function (Faker\Generator $faker)
{

    return [

        'anio' =>$faker->year,
        'periodo'=>$faker->numberBetween($min = 1, $max = 4),
        'fecha-inicio'=>$faker->date,
        'fecha_fin'=>$faker->date,
        'activo'=>$faker->randomElement(['SI','NO']),
        'peso_gestion' =>$faker->buildingNumber,
        'id_tipo_gestion'=>$faker->numberBetween($min = 1, $max = 6),
    ];
});

$factory->define(App\Plan_gestion_unidad::class, function (Faker\Generator $faker)
{

    return [
    
        'id_gestion' =>$faker->numberBetween($min = 1, $max = 20),
        'id_plan'=>$faker->numberBetween($min = 1, $max = 5),
        'id_unidad'=>$faker->numberBetween($min = 1, $max = 20),

    ];
});