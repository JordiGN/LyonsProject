<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	function __construct(){
			parent::__construct();
			$this->load->model('m_produccion'); //el modelo es el nombre del archivo phxp
			#carga de librerias
			#carga de helpers
		}
	public function index()//página principal
	{
		$this->load->view('login');
	}
	//Se carga el menú principal

	public function cargarMenu(){
		$this->load->view('menu');
	}

	//Funciones de Materiales

	public function menuMateriales(){
		$this->load->view('menumateriales');
		$this->load->view('sections/footer');
	}
		//Apartado de productos
			public function matProductos(){
				$this->load->view('matProductos');
			}
			public function matProveedores(){
				$this->load->view('matProveedores');
			}
			public function matAlmacenes(){
				$this->load->view('matAlmacenes');

			}
			public function matTallas(){
				$this->load->view('matTallas');

			}
			public function matUnidadesdemedida(){
				$this->load->view('matUnidadesdemedida');

			}
			public function matCategorias(){
				$this->load->view('matCategorias');

			}
		//Apartado de Compras
			public function matComprasAlmacen(){
				$this->load->view('matComprasAlmacen');
			}
			public function matConsultaCompras(){
				$this->load->view('matConsultaCompras');
			}
		//Apartado de existencias
			public function matConsultaExistencias(){
				$this->load->view('matConsultaExistencias');

			}
		//Apartado de finanzas
			public function matCuentasPorPagar(){
				$this->load->view('matCuentasPorPagar');
			}
			public function matBancos(){
				$this->load->view('matBancos');
			}
		//Apartado de movimientos
			public function matSalidasAlmacen(){
				$this->load->view('matSalidasAlmacen');

			}
			public function matEntradasAlmacen(){
				$this->load->view('matEntradasAlmacen');
			}
			public function matReporteMovimientos(){
				$this->load->view('matReporteMovimientos');
			}
}

/*
productos
proveedores
almacenes
corridas o tallas
unidad de medidas
----------------------
compras a almcacén
consulta compras
----------------------
consulta existencias
----------------------
cuentas por pagar nota
bancos
----------------------
movimientos al almacen
entrada inventario
reorte movimientos (no compras)
*/

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
