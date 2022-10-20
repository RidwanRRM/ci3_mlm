<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page_render 
{
		
	public function __construct()
	{
		$CI =& get_instance();
		
		$this->userlevel = $CI->session->userdata('userlevel');
		
		$CI->load->model('master/Master_setting');
		
		$menu = $CI->Master_setting->SetMenu( strtolower($this->userlevel) );
	
		$menus = array('id' => array(), 'parents' => array());
		
			foreach ($menu as $menu_key){
				
				$menus['id'][$menu_key['id']] = $menu_key;
				
				$menus['parents'][$menu_key['parent']][] = $menu_key['id'];
			}
		
		$this->menus = array("menus" => $menu);
		
		$file_type = get_mime_by_extension('../../assets/img/' . $CI->session->userdata('photo'));
		
		switch ($file_type){
			
			case 'image/jpeg':
			$photo = $CI->session->userdata('photo');
			break;
			
			case 'image/png':
			$photo = $CI->session->userdata('photo');
			break;
			
			default:
			$photo = 'default.jpg';
			break;
			
		}
		
		$photos = array( "photos" => $photo );
		
		$this->data_menu = array("base_url" => base_url(),
						"name" => ucwords($CI->session->userdata('nama')),
						"userlevel" => ucwords($CI->session->userdata('userlevel')),
						"photos" => $photo,
						"menus" =>$menus
						);
		$this->settings = array_merge($CI->Master_setting->SetSettings(),$photos,$this->menus,$this->data_menu);
		
	
	}
	
	public function set_layout($layout,$data=NULL)
	{
			$CI =& get_instance();
			
			return array("page_content" => $CI->parser->parse($layout,$data,true));
	}
	
	public function set_menu($data=NULL,$active_menu=NULL,$level=NULL)
	{
		$CI =& get_instance();
		
		return array("menu" =>  $CI->parser->parse("master/m_menu",array_merge($data, array("active_menu"=>$active_menu)),true) ) ;
		
	}
	
	public function page_auth_check($url)
	{
		$CI =& get_instance();
		
		$CI->load->model('master/Master_setting');
		
		$check = $CI->Master_setting->check_auth( strtolower($this->userlevel), $url );
		
		return $check;
		
	}
	
	public function render($parent_page,$page,$data=array())
	{
		$CI =& get_instance();
		
		$this->menu = $this->set_menu($this->data_menu,$parent_page,$CI->session->userdata('userlevel'));
		
		$layout		= $this->set_layout($page,array_merge(array("base_url"=>base_url(), 
																"thispage"=>base_url().$page, 
																"thisparent"=>$parent_page),$data));
		$this->page_auth_check($parent_page);

		 if($this->page_auth_check($parent_page) > 0){
			
			return $CI->parser->parse('master/home',array_merge($this->settings,$layout,$this->menu));
		
		}else{
			
			redirect('home');
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */