<?php

namespace Database\Seeders;

use App\Models\Program;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Program::query()->delete();

        $programs =[            
            ['name' => 'Administración de empresas', 'description' => 'El Administrador de Empresas egresado de TEINCO es un profesional emprendedor con conocimientos para interpretar información financiera. Le ofrecemos a la sociedad Profesionales en Administración de Empresas, llenos de una riqueza y una calidez humana.', 'icon' => 'bx bx-building-house', 'color' => 'bg-warning'],              
            ['name' => 'Contaduría pública', 'description' => 'Carrera universitaria basada en la contabilidad desde el análisis, medición y toma de decisiones económicas en compañías públicas o privadas. El Contador público egresado de TEINCO está en capacidad de planear, diseñar, implementar, dirigir, analizar y evaluar procesos contables bajo normas nacionales e internacionales.','icon' => 'bx bx-money', 'color' => 'bg-info'],              
            ['name' => 'Diseño digital publicitario', 'description' => 'Propondrás estrategias de publicidad digital desde el diseño, implementarás estrategias de percepción del consumidor y/o audiencia digital. Además serás capaz de formular proyectos aplicados al diseño digital y programarás productos multimediales e interactivos para promocionar productos en apps.','icon' => 'bx bxl-figma', 'color' => 'bg-danger'],              
            ['name' => 'Ingeniería mecatrónica', 'description' => '¿Qué aprenderás en el programa de Ingeniería Mecatrónica? Desarrollarás productos o máquinas partiendo de los principios del diseño, la mecánica de precisión, el control y la electrónica, entre muchas otras áreas, que permiten la dirección, desarrollo y gestión de proyectos de ingeniería acordes a las necesidades del sector productivo. Obtendrás la capacidad de formular y optimizar procesos industriales de automatización, que fomentan el desarrollo industrial.','icon' => 'bx bx-bot', 'color' => 'bg-success'],              
            ['name' => 'Ingeniería de sistemas', 'description' => 'El Ingeniero de Sistemas de TEINCO es un profesional Integro capaz de apoyar diversos procesos afines a la ingeniería desde su formación académica por ciclos propedéuticos, con habilidades para proponer y liderar soluciones informáticas y de TI','icon' => 'bx bx-desktop', 'color' => 'bg-primary'],              
            ['name' => 'Marketing y negocios digitales', 'description' => 'El Profesional en Marketing y negocios digitales egresado de TEINCO, es un Profesional con capacidad de planear, crear, explicar, argumentar, reunir, interpretar, sintetizar, modificar y reorganizar proyectos con base a las necesidades de los negocios y el comercio digital.','icon' => 'bx bx-stats', 'color' => 'bg-dark'],              
            ['name' => 'Tecnología en gestión de la comunicación gráfica', 'description' => 'Crearás, aportarás e innovarás a partir de la creación de nuevas ideas gráficas expresadas en diferentes campos artististicos y visuales (Pintura, diagramación de revistas, diseño de Posters, Identidad visual, maquetación web, aplicativos móviles, pdfs interactivos, edición y retoque digital de imágen).','icon' => 'bx bx-rocket', 'color' => 'bg-secondary'],                                      
      ];

      foreach($programs as $program){        
          
        Program::create($program);
      }
    }
}
