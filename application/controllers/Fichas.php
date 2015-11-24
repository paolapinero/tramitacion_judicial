<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once APPPATH . 'libraries/excel_lib/PHPExcel.php';
include_once APPPATH . 'libraries/excel_lib/PHPExcel/IOFactory.php';
class Fichas extends CI_Controller {

	public function __construct(){	
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
    $this->load->library('email');
    $this->load->library('form_validation');
    $this->load->library('javascript');
    $this->load->library('session');
		$this->load->library('parser');
		$this->load->model('Usuario');
		$this->load->model('Demandado');
    $this->load->model('Subestado');
    $this->load->model('Abogado');
    $this->load->model('Estado');
    $this->load->model('Ficha');
    $this->load->model('Garantia');
    $this->load->model('TipoDocumento');
    $this->load->model('Sucursal');
    $this->load->model('Demandante');

	}

  function seleccionar_demandante_importar() {
      $demandantes = $this->Demandante->buscar_select();
      $this->load->view();
  }
	
	function importar_fichas(){
        ini_set("memory_limit","300000000000M");
        //$this->init();
        $this->load->library('excel');
		    $process = $this->input->post('process');

        $has_error = false;
        $th_error = false;

        if($process && !empty($_FILES['file']['name'])){
            //Cargar PHPExcel library 
        	 $name   = $_FILES['file']['name'];
            $tname  = $_FILES['file']['tmp_name'];
           	$objPHPExcel = PHPExcel_IOFactory::load($tname);

            $fichas = array();
            $organizaciones_sociales = array();
            $organizaciones_sociales_e = array();
            $organizaciones_p = array();
            $organizaciones_s = array();
            $organizaciones_a = array();
            $nombres_s = array();
            $amchams = array();
            $empresas = array();
            $count = 1;
            $th_count = 0;
            $pagina = 0;
            $data = array();

            foreach ($objPHPExcel->getWorksheetIterator() as $worksheet) {
                
                if($pagina == 0){
                    $pagina++;                        
                    foreach ($worksheet->getRowIterator() as $row) {
                        $cellIterator = $row->getCellIterator();
                        $cellIterator->setIterateOnlyExistingCells(FALSE); // Loop all cells, even if it is not set
                    
                        if ($row->getRowIndex()>1 ) {
                            $i = 0;
                            $j = 0;

                            foreach ($cellIterator as $cell) {
                                switch ($i) {
                                    case 1:
                                        $num_operacion = $cell->getCalculatedValue();
                                        break;
                                    case 2:
                                        $producto = $cell->getCalculatedValue();
                                        break;
                                    case 3:
                                        $rut_demandado = $cell->getCalculatedValue();
                                        break;
                                    case 4:
                                        $nombre_cliente = $cell->getCalculatedValue();
                                        break;
                                    case 5:
                                        $cij = $cell->getCalculatedValue();
                                        break;
                                    case 6:
                                        $fecha_recepcion = $cell->getCalculatedValue();
                                        break;
                                    case 7:
                                        $fecha_ingreso_tribunal = $cell->getCalculatedValue();
                                        break;
                                    case 8:
                                        $fecha_entrega_abogado = $cell->getCalculatedValue();
                                        break;
                                    case 9:
                                        $fecha_termino_juicio = $cell->getCalculatedValue();
                                        break;
                                    case 10:
                                        $fch_nrfcc = $cell->getCalculatedValue();
                                        break;
                                    case 11:
                                        $estado_ficha = $cell->getCalculatedValue();
                                        break;                                    
                                    case 12:
                                        $estado_inicial_juicio_glosa = $cell->getCalculatedValue();
                                        break;
                                    case 13:
                                   	 	$subestado_inicial_juicio_glosa = $cell->getCalculatedValue();
                                    	break;
                                    case 14:
                                   	 	$procedimiento_glosa = $cell->getCalculatedValue();
                                    	break;
                                    case 15:
                                   	 	$abogado_externo = $cell->getCalculatedValue();
                                    	break;
                                    case 16:
                                   	 	$deuda = $cell->getCalculatedValue();
                                    	break;
                                    case 17:
                                   	 	$at_meses = $cell->getCalculatedValue();
                                    	break;
                                    case 18:
                                   	 	$at_dias = $cell->getCalculatedValue();
                                    	break;
                                    case 19:
                                   	 	$area1 = $cell->getCalculatedValue();
                                    	break;
                                    case 20:
                                   	 	$fono1 = $cell->getCalculatedValue();
                                    	break;
                                    case 21:
                                   	 	$area2 = $cell->getCalculatedValue();
                                    	break;
                                    case 22:
                                   	 	$fono2 = $cell->getCalculatedValue();
                                    	break;
                                    case 23:
                                   	 	$area3 = $cell->getCalculatedValue();
                                    	break;
                                    case 24:
                                   	 	$fono3 = $cell->getCalculatedValue();
                                    	break;
                                    case 25:
                                   	 	$area4 = $cell->getCalculatedValue();
                                    	break;
                                    case 26:
                                   	 	$fono4 = $cell->getCalculatedValue();
                                    	break;
                                    case 27:
                                   	 	$jui_ctia_peso_b = $cell->getCalculatedValue();
                                    	break;
                                    case 28:
                                   	 	$tipo_garantia = $cell->getCalculatedValue();
                                    	break;
                                    case 29:
                                   	 	$sub_segmento = $cell->getCalculatedValue();
                                    	break;
                                    case 30:
                                   	 	$segmento_gestion = $cell->getCalculatedValue();
                                    	break;
                                    case 31:
                                   	 	$nombre_sucursal = $cell->getCalculatedValue();
                                    	break;
                                    case 32:
                                   	 	$zona = $cell->getCalculatedValue();
                                    	break;
                                    case 33:
                                   	 	$territorial = $cell->getCalculatedValue();
                                    	break;
                                    case 34:
                                   	 	$segmento = $cell->getCalculatedValue();
                                    	break;
                                    case 35:
                                   	 	$marca = $cell->getCalculatedValue();
                                    	break;
                                    case 36:
                                   	 	$sub_marca = $cell->getCalculatedValue();
                                    	break;
                                    case 37:
                                   	 	$rut_procurador = $cell->getCalculatedValue();
                                    	break;
                                    case 38:
                                   	 	$nom_procurador = $cell->getCalculatedValue();
                                    	break;
                                    case 39:
                                   	 	$caj_glosa = $cell->getCalculatedValue();
                                    	break;
                                    case 40:
                                   	 	$rol_juicio = $cell->getCalculatedValue();
                                    	break;
                                    case 41:
                                   	 	$rut_abg_interno = $cell->getCalculatedValue();
                                    	break;
                                    case 42:
                                   	 	$nom_abg_interno = $cell->getCalculatedValue();
                                    	break;
                                    case 43:
                                   	 	$recepcion_caso = $cell->getCalculatedValue();
                                    	break;
                                    case 44:
                                   	 	$tipo_juicio = $cell->getCalculatedValue();
                                    	break;
                                    case 45:
                                   	 	$nom_tribunal = $cell->getCalculatedValue();
                                    	break;
                                    case 46:
                                   	 	$trb_ciudad = $cell->getCalculatedValue();
                                    	break;
                                    case 47:
                                   	 	$clas_tribunal = $cell->getCalculatedValue();
                                    	break;
                                    case 48:
                                   	 	$fecha_suspension = $cell->getCalculatedValue();
                                    	break;
                                    case 49:
                                   	 	$dias_estjudicial = $cell->getCalculatedValue();
                                    	break;
                                    case 50:
                                   	 	$dias_estjudicial_proy = $cell->getCalculatedValue();
                                    	break;
                                    case 51:
                                   	 	$fec_est_judicial = $cell->getCalculatedValue();
                                    	break;
                                    case 52:
                                   	 	$tramo_antiguedad_mantencion = $cell->getCalculatedValue();
                                    	break;
                                    case 53:
                                   	 	$tramo_antiguedad_estado = $cell->getCalculatedValue();
                                    	break;
                                    case 54:
                                   	 	$antiguedad_mantencion = $cell->getCalculatedValue();
                                    	break;
                                    case 55:
                                   	 	$semaforo = $cell->getCalculatedValue();
                                    	break;
                                    case 56:
                                   	 	$semaforo_proy = $cell->getCalculatedValue();
                                    	break;
                                    case 57:
                                   	 	$semaforo_color = $cell->getCalculatedValue();
                                    	break;
                                    case 58:
                                   	 	$atraso_en_dias = $cell->getCalculatedValue();
                                    	break;
                                   	case 59:
                                   	 	$castigo = $cell->getCalculatedValue();
                                    	break;
                                    case 60:
                                   	 	$provision = $cell->getCalculatedValue();
                                    	break;
                                    case 61:
                                   	 	$provision_proy = $cell->getCalculatedValue();
                                    	break;
                                    default:
                                        break;
                                }
                                $i++;
                            }
                           	//Busco id del demandado
                           	$demandado = $this->Demandado->buscar(array('rut' => trim($rut_demandado, 0)));
                            //print_r(trim($rut_demandado, 0)); die();
                           	if (empty($demandado)) {
                                //Tengo que guardar en la tabla demandado
                                $nuevo_demandado = array(
                                  'rut' => trim($rut_demandado, 0),
                                  'nombre' => $nombre_cliente
                                );
                                //print_r($nuevo_demandado);die();
                                $demandado_id = $this->Demandado->agregar($nuevo_demandado);  

                            } else {
                              $demandado_id = $demandado[0]['id'];
                            }
                            //Buscar subestado_id
                            $subestado = $this->Subestado->buscar(array('subestado' => substr($subestado_inicial_juicio_glosa, 2)));
                            if (empty($subestado)) {
                                //Busco estado 
                                $estado = $this->Estado->buscar(array('estado' => substr($estado_inicial_juicio_glosa,2)));
                                if (empty($estado)) {
                                  //Creo el estado
                                  $nuevo_estado = array(
                                      'estado' => substr($estado_inicial_juicio_glosa,2),
                                      'activo' => 'S'
                                    );
                                    $estado_id = $this->Estado->agregar($nuevo_estado);
                                } else {
                                  $estado_id = $estado[0]['id'];
                                }
                                $nuevo_subestado = array(
                                    'orden' => substr($estado_inicial_juicio_glosa,0,1),
                                    'estado_id' => $estado_id,
                                    'subestado' => substr($estado_inicial_juicio_glosa, 2),
                                    'active' => 'S'
                                );
                                $subestado_id = $this->Subestado->agregar($nuevo_subestado);
                            } else {
                              $subestado_id = $subestado[0]['id'];
                             // print_r($subestado);die();
                            }
                            //Buscar abogado (abogado interno), tipo_id en tabla abogados = 1
                            $abogado = $this->Abogado->buscar(array('rut' => $rut_abg_interno,'tipo_id' => 1));
                            if (empty($abogado)) {    
                                $nuevo_abogado = array(
                                    'rut' => $rut_abg_interno,
                                    'nombre' => $nom_abg_interno,
                                    'tipo_id' => 1,
                                  );
                                $abogado_id = $this->Abogado->agregar($nuevo_abogado);
                            } else {
                              $abogado_id = $abogado[0]['id'];
                            //  print_r($abogado);die();
                            }
                            //Buscar procurador (abogado externo), tipo_id en tabla abogados = 2
                            $procurador = $this->Abogado->buscar(array('rut' => $rut_procurador,'tipo_id' => 2));
                            if (empty($procurador)) {    
                                $nuevo_procurador = array(
                                    'rut' => $rut_procurador,
                                    'nombre' => $nom_procurador,
                                    'tipo_id' => 2,
                                  );
                                $procurador_id = $this->Abogado->agregar($nuevo_procurador);
                            } else {
                              $procurador_id = $procurador[0]['id'];
                             // print_r($procurador);die();
                            }
                            //Buscar tipo documento
                            $tipo_documento = $this->TipoDocumento->buscar(array('documento' => $producto));
                            if (empty($tipo_documento)) {    
                                $nuevo_documento = array(
                                    'documento' => $producto,
                                    'active' => 'S',
                                  );
                                $tipo_documento_id = $this->TipoDocumento->agregar($nuevo_documento);
                            } else {
                              $tipo_documento_id  = $tipo_documento[0]['id'];
                             //print_r($tipo_documento);die();
                            }
                            //buscar garantia
                            $garantia = $this->Garantia->buscar(array('garantia' => $tipo_garantia));
                            if (empty($garantia)) {    
                                $nueva_garantia = array(
                                    'garantia' => $tipo_garantia,
                                  );
                                $garantia_id = $this->Garantia->agregar($nueva_garantia);
                            } else {
                              $garantia_id = $garantia[0]['id'];
                              //print_r($garantia);die();
                            }
                            //Buscar sucursal
                            $sucursal = $this->Sucursal->buscar(array('sucursal' => $nombre_sucursal, 'demandante_id' => $this->input->post('demandante_id')));
                            if (empty($sucursal)) {    
                                $nueva_sucursal = array(
                                    'sucursal' => $nombre_sucursal,
                                    'demandante_id' => $this->input->post('demandante_id')
                                  );
                                $sucursal_id = $this->Sucursal->agregar($nueva_sucursal);
                            } else {
                             $sucursal_id = $sucursal[0]['id'];
                             // print_r($sucursal);die();
                            }
                            //Verificar rol
                            $ficha = array(
                                'demandado_id' => $demandado_id,
                                'demandante_id' => $this->input->post('demandante_id'),
                                'tribunal_id' => $tipo_juicio,
                                'rol' =>'C-'.$rol_juicio,
                                'subestado_id'=> $subestado_id,
                                'abogado_id' => $abogado_id,
                                'fecha_asignacion' => date('Y-m-d'),
                                //'fecha_ingreso_distribucion'=>,
                                'fecha_ingreso_tribunal' => $fecha_ingreso_tribunal,
                                'procurador_id' => $procurador_id,
                                //'receptor_id' =>,
                                //'fecha_encargo'=>,
                                'numero_operacion' => $num_operacion,
                                'tipo_documento_id' => $tipo_documento_id,
                                'garantia_id' => $garantia_id,
                                'deuda'=> $deuda,
                                //'detalle_deuda' =>,
                                'sucursal_id' => $sucursal_id,
                                'CIJ' => $cij,
                            );
                            array_push($fichas, $ficha);
                            
                        }
                    }
                    
                    $data['fichas'] = $fichas;
                    // $data['empresas'] = $empresas;
                    $this->Ficha->insertar_fichas($fichas);
                }

            }
           
        } 

        $demandantes = $this->Demandante->buscar_select();
        $data['demandantes'] = $demandantes;
        $this->load->view('fichas/importar_fichas',$data);

    }

}
?>