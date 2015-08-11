<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SedarCtr extends CI_Controller {
    function SedarCtr()
    {
	parent::__construct();
	$this->load->model('SedarModel');
	
	$this->load->library('session');
    }
    
        public function index()
    {
	$this -> load -> view('header');
	$data['getSlider']=$this->SedarModel->getslider();
	$data['tabrands']=$this->SedarModel->tab_brand();
	$data['tabproducts']=$this->SedarModel->tab_products();
	$data['BrandsName']=$this->SedarModel->getBrandsTable();
	$data['bringproducts']=$this->SedarModel->BringProducts();
        $data['TermsName']=$this->SedarModel->getTermsTable();
	
	$data['getnews']=$this->SedarModel->getnews();
	
	$data['brands']=$this->SedarModel->getBrandsTable();
	//print_r($data['getSlider']);
	//exit;
	$this -> load -> view('UI/index',$data);
	$this -> load -> view('footer',$data);
    }
   
    function AboutUs()
    {
	$this -> load -> view('header');
	$this -> load -> view('UI/AboutUs');
	$data['BrandsName']=$this->SedarModel->getBrandsTable();
	$data['TermsName']=$this->SedarModel->getTermsTable();
	$this->load->view('footer',$data);
    }
   
    function ContactUs()
    {
	$this -> load -> view('header');
	$data['BrandsName']=$this->SedarModel->getBrandsTable();
	$data['TermsName']=$this->SedarModel->getTermsTable();
	$this -> load -> view('UI/Contact',$data);
	$this->load->view('footer',$data);
	    
    }
    function Franchising_Opportunities()
    {
	$this->load->view('header');
	$data['Franchising_Opportunities']=$this->SedarModel->FetchFranchisingOpportunities();
	$data['BrandsName']=$this->SedarModel->getBrandsTable();
	$data['TermsName']=$this->SedarModel->getTermsTable();
	$this->load->view('UI/FranchisingOpportunities',$data);
	$this->load->view('footer',$data);
    }
    function Clients()
    {
	$this->load->view('header');
	$data['Clients']=$this->SedarModel->FetchClientsImages();
	$data['BrandsName']=$this->SedarModel->getBrandsTable();
	$data['TermsName']=$this->SedarModel->getTermsTable();
	$data['clientDetails']=$this->SedarModel->clientDetails();
	$this->load->view('UI/Clients',$data);
	$this->load->view('footer',$data);
    }
    
    function Stores()
    {
	$this->load->view('header');
	$this->load->view('UI/Stores');
	$data['BrandsName']=$this->SedarModel->getBrandsTable();
	$data['TermsName']=$this->SedarModel->getTermsTable();
	$this->load->view('footer',$data);
    }
    function Projects()
    {
	$this->load->view('header');
	$data['Projects']=$this->SedarModel->FetchProjectsImages();
	$data['BrandsName']=$this->SedarModel->getBrandsTable();
	$data['TermsName']=$this->SedarModel->getTermsTable();
	$data['projectTitle']=$this->SedarModel->getTermsTable();
	$data['ProjectDetails']=$this->SedarModel->projectDetails();
	$this->load->view('UI/Projects',$data);
	$this->load->view('footer',$data);
    }
    
    function ProductSearch()
    {
	$data['ProductMaterial']=$this->SedarModel->FetchProductMaterial();
	$data['ProductAccessories']=$this->SedarModel->FetchProductAccessories();
	$data['BrandsName']=$this->SedarModel->getBrandsTable();
	$data['TermsName']=$this->SedarModel->getTermsTable();
	$this->load->view('header');
	$this->load->view('UI/ProductSearch',$data);
	$this->load->view('footer',$data);
    }
    
    function Product($brand,$proName)
    {
	$recentlyViewedData = array(
					'0'=>array('brandId' => $brand,'imageId' => $proName),
					'1'=>array('brandId' => $brand,'imageId' => $proName),
					'2'=>array('brandId' => $brand,'imageId' => $proName),
					'3'=>array('brandId' => $brand,'imageId' => $proName),
					'4'=>array('brandId' => $brand,'imageId' => $proName) 
				     );
	    for($i=5;$i>0;$i--){
	    $ifEmpty=$this->session->userdata['recentlyViewedData'][$i]['brandId'];
	    if($ifEmpty==""){
		$recentlyViewedData[$i]['brandId'] =$brand;
		$recentlyViewedData[$i]['imageId'] =$proName;
		break;
	    }
	}
	$this->session->set_userdata('recentlyViewedData', $recentlyViewedData);
	$recentlyViewedData=$this->session->userdata('recentlyViewedData');
//	echo "<pre>";
//	echo print_r($recentlyViewedData);
//	echo "</pre>";
//    	exit;
	$this->load->view('header');      
	$data['getProduct']=$this->SedarModel->getProductName($brand,$proName);
	$data['getProductDetail']=$this->SedarModel->getProduct($brand);
	$data['BrandsName']=$this->SedarModel->getBrandsTable();
	$data['TermsName']=$this->SedarModel->getTermsTable();
	$this->load->view('UI/ProductBrand',$data);
	$this->load->view('footer',$data);
    }
    
    function Brands($brand)
    {
	//$this->session->unset_userdata('data0');
	//$this->session->unset_userdata('data1');
	//$this->session->unset_userdata('data2');
	//$this->session->unset_userdata('data3');
	//$this->session->unset_userdata('data4');
	$this->load->view('header');
	$data['Brands']=$this->SedarModel->getBrands($brand);
	$data['getProduct']=$this->SedarModel->getProduct($brand);
	$data['BrandsName']=$this->SedarModel->getBrandsTable();
	$data['TermsName']=$this->SedarModel->getTermsTable();
	$this->load->view('UI/Brands',$data);
	$this->load->view('footer',$data);
    }
    
    function Terms($terms)
    {	
	$this->load->view('header');	
	$data['Terms']=$this->SedarModel->getTerms($terms);
	$data['BrandsName']=$this->SedarModel->getBrandsTable();
	$data['TermsName']=$this->SedarModel->getTermsTable();
	$this->load->view('UI/Terms',$data);
	$this->load->view('footer',$data);
    }
    
    function Feedback()
    {
	$this->load->view('header');	
	$data['Feedback']=$this->SedarModel->FetchFeedbackDescription();
	$data['TermsName']=$this->SedarModel->getTermsTable();
	$data['BrandsName']=$this->SedarModel->getBrandsTable();
	$this->load->view('UI/feedback',$data);
	$this->load->view('footer',$data);
    }

    function NewsLetter()
    {
	$this->load->view('header');
	$this->load->view('UI/NewsLetter');
	$data['TermsName']=$this->SedarModel->getTermsTable();
	$data['BrandsName']=$this->SedarModel->getBrandsTable();
	$this->load->view('footer',$data);
    }
    function News($id)
    {
	$data['newsdata']=$this->SedarModel->getNewsData($id); 
	$this->load->view('header');
	$this->load->view('UI/News',$data);
	$this->load->view('footer');
    }
    
}