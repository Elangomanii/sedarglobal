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
	$data['productsName']=$this->SedarModel->getProductsTable();
	$data['getnews']=$this->SedarModel->getnews();
	$data['country']=$this->SedarModel->getcountry();
        $data['state']=$this->SedarModel->getstate();
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
	$data['productsName']=$this->SedarModel->getProductsTable();
	$data['TermsName']=$this->SedarModel->getTermsTable();
	$this->load->view('footer',$data);
    }
   
    function ContactUs()
    {
	$this -> load -> view('header');
	$data['contactDetails']=$this->SedarModel->getContactTable();
	$data['BrandsName']=$this->SedarModel->getBrandsTable();
	$data['productsName']=$this->SedarModel->getProductsTable();
	$data['TermsName']=$this->SedarModel->getTermsTable();
	$data['country']=$this->SedarModel->getcountry();
        $data['state']=$this->SedarModel->getstate();
	$this -> load -> view('UI/Contact',$data);
	$this->load->view('footer',$data);
	    
    }
    function Franchising_Opportunities()
    {
	$this->load->view('header');
	$data['Franchising_Opportunities']=$this->SedarModel->FetchFranchisingOpportunities();
	$data['BrandsName']=$this->SedarModel->getBrandsTable();
	$data['productsName']=$this->SedarModel->getProductsTable();
	$data['TermsName']=$this->SedarModel->getTermsTable();
	$data['country']=$this->SedarModel->getcountry();
        $data['state']=$this->SedarModel->getstate();
	$this->load->view('UI/FranchisingOpportunities',$data);
	$this->load->view('footer',$data);
    }
    function Clients()
    {
	$this->load->view('header');
	$data['Clients']=$this->SedarModel->FetchClientsImages();
	$data['BrandsName']=$this->SedarModel->getBrandsTable();
	$data['productsName']=$this->SedarModel->getProductsTable();
	$data['TermsName']=$this->SedarModel->getTermsTable();
	$data['clientDetails']=$this->SedarModel->clientDetails();
	$data['country']=$this->SedarModel->getcountry();
        $data['state']=$this->SedarModel->getstate();
	$this->load->view('UI/Clients',$data);
	$this->load->view('footer',$data);
    }
    
//    function Stores()
//    {
//	$this->load->view('header');
//	$data['BrandsName']=$this->SedarModel->getBrandsTable();
//	$data['productsName']=$this->SedarModel->getProductsTable();
//	$data['TermsName']=$this->SedarModel->getTermsTable();
//	$this->load->view('UI/Stores',$data);
//	$this->load->view('footer',$data);
//    }
    function Projects()
    {
	$this->load->view('header');
	$data['Projects']=$this->SedarModel->FetchProjectsImages();
	$data['BrandsName']=$this->SedarModel->getBrandsTable();
	$data['productsName']=$this->SedarModel->getProductsTable();
	$data['TermsName']=$this->SedarModel->getTermsTable();
	$data['projectTitle']=$this->SedarModel->getTermsTable();
	$data['ProjectDetails']=$this->SedarModel->projectDetails();
	$data['country']=$this->SedarModel->getcountry();
        $data['state']=$this->SedarModel->getstate();
	$this->load->view('UI/Projects',$data);
	$this->load->view('footer',$data);
    }
    //product search author pravinkumar
    function ProductSearch($id)
    {
	$data['id']=$id;
	$data['BrandsName']=$this->SedarModel->getBrandsTable();
	$data['productsName']=$this->SedarModel->getProductsTable();
	$data['ProductCategory']=$this->SedarModel->FetchProductCategory();
	$data['ProductMaterial']=$this->SedarModel->FetchProductMaterial();
	$data['ProductAccessories']=$this->SedarModel->FetchProductAccessories();
	$data['TermsName']=$this->SedarModel->getTermsTable();
	$data['allProducts']=$this->SedarModel->getAllProduct();
	$data['country']=$this->SedarModel->getcountry();
        $data['state']=$this->SedarModel->getstate();
	$this->load->view('header');
	$this->load->view('UI/ProductSearch',$data);
	$this->load->view('footer',$data);
    }
    function fetchBranName(){
	$this->output->set_content_type('application/json');
	$id = $_POST['productId'];
	$data = $this->SedarModel->fetchBranName($id);
	$data = array(
	    'branName' => $data[0]['name'],
	);
	echo json_encode(array($data));
    }
    function ajaxProductSearch(){
	
	$this->output->set_content_type('application/json');
	$pageNumber = $_POST['pageNumber'];
	$perPage = 2;
	$position = ($pageNumber*$perPage);
	$brand = array_filter(explode(',',$_POST['brand']));
	$product = array_filter(explode(',',$_POST['product']));
	$material = array_filter(explode(',',$_POST['material']));
	$accessories = array_filter(explode(',',$_POST['accessories']));
	$motorization = $_POST['motorization'];
	$data = $this->SedarModel->ajaxProductSearch($brand,$product,$material,$accessories,$motorization,$position,$perPage);
	$count = $this->SedarModel->searchCount($brand,$product,$material,$accessories,$motorization);
	$total = ceil(count($count) / $perPage);
	$data = array(
	    'totalCount' => count($count),
	    'pageTotal' => $total,
	    'rows' => $data
	);
	echo json_encode(array($data));
    }
    //pravinkumar end
    

    function Product($brand,$proName)
    {
	//$recentlyViewedData = array(
	//				'0'=>array('brandId' => $brand,'imageId' => $proName),
	//				'1'=>array('brandId' => $brand,'imageId' => $proName),
	//				'2'=>array('brandId' => $brand,'imageId' => $proName),
	//				'3'=>array('brandId' => $brand,'imageId' => $proName),
	//				'4'=>array('brandId' => $brand,'imageId' => $proName) 
	//			     );
	//    for($i=5;$i>0;$i--){
	//    $ifEmpty=$this->session->userdata['recentlyViewedData'][$i]['brandId'];
	//    if($ifEmpty==""){
	//	$recentlyViewedData[$i]['brandId'] =$brand;
	//	$recentlyViewedData[$i]['imageId'] =$proName;
	//	break;
	//    }
	//}
	//$this->session->set_userdata('recentlyViewedData', $recentlyViewedData);
	//$recentlyViewedData=$this->session->userdata('recentlyViewedData');
//	echo "<pre>";
//	echo print_r($recentlyViewedData);
//	echo "</pre>";
//    	exit;
	$this->load->view('header');      
	$data['getProduct']=$this->SedarModel->getProductName($brand,$proName);
	$data['getProductDetail']=$this->SedarModel->getProduct($brand);
	$data['BrandsName']=$this->SedarModel->getBrandsTable();
	$data['productsName']=$this->SedarModel->getProductsTable();
	$data['TermsName']=$this->SedarModel->getTermsTable();
	$data['country']=$this->SedarModel->getcountry();
        $data['state']=$this->SedarModel->getstate();
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
	$data['productsName']=$this->SedarModel->getProductsTable();
	$data['TermsName']=$this->SedarModel->getTermsTable();
	$data['country']=$this->SedarModel->getcountry();
        $data['state']=$this->SedarModel->getstate();
	$this->load->view('UI/Brands',$data);
	$this->load->view('footer',$data);
    }
    
    function Terms($terms)
    {	
	$this->load->view('header');	
	$data['Terms']=$this->SedarModel->getTerms($terms);
	$data['BrandsName']=$this->SedarModel->getBrandsTable();
	$data['productsName']=$this->SedarModel->getProductsTable();
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
	$data['productsName']=$this->SedarModel->getProductsTable();
	$this->load->view('UI/feedback',$data);
	$this->load->view('footer',$data);
    }

    function NewsLetter()
    {
	$this->load->view('header');
	$this->load->view('UI/NewsLetter');
	$data['TermsName']=$this->SedarModel->getTermsTable();
	$data['BrandsName']=$this->SedarModel->getBrandsTable();
	$data['productsName']=$this->SedarModel->getProductsTable();
	$this->load->view('footer',$data);
    }
    function News($id)
    {
	$data['newsdata']=$this->SedarModel->getNewsData($id); 
	$this->load->view('header');
	
	$data['TermsName']=$this->SedarModel->getTermsTable();
	$data['BrandsName']=$this->SedarModel->getBrandsTable();
	$data['productsName']=$this->SedarModel->getProductsTable();
	$this->load->view('UI/News',$data);
	$this->load->view('footer',$data);
    }
    function drapes()
    {
	$data['productsName']=$this->SedarModel->getProductsTable();
	$data['BrandsName']=$this->SedarModel->getBrandsTable();
	$this->load->view('header');
	$this->load->view('UI/Drapes',$data);
	$this->load->view('footer');
    }
    //Hakkim Ctrl st
     function findState()
    {
 $cntCode=$_POST['codecountry'];
 $sql="SELECT * FROM ourstate where CountryCode='$cntCode'";
 $query = $this->db->query($sql)->result_array();
 ?>
  <option>Select State</option>
  <?php
 foreach($query as $row)
 {
     ?>
    
     <option value="<?php echo $row['StateCode']?>"> <?php echo $row['StateName']?> </option>
     <?php 
 }
    }
    
    function findStore()
    {
 $path ='http://localhost/Global_Admin/uploads/';
 
 $cntCode=$_POST['codestore'];
 $sql="SELECT * FROM store_image where country='$cntCode'";
 $query = $this->db->query($sql)->result_array();
 ?>
  <?php
 foreach($query as $row)
 {
     ?>
 <div class="col-md-4 col-sm-6">
 <div class="row">
            <div class="project">
    <img class="img-responsive" onClick="getvalueModel($(this));" data-toggle="modal" data-target="#myModal" src="<?php echo $path.$row['textImage'];?>">
     <h3><?php echo $row['addresstitle']?></h3>
     </div>
 </div>
        
 </div>
     <?php 
 }
 
 
    }
    
    function findStorecount()
    {
 
 $cntCode=$_POST['getimagecount'];
 $sql="SELECT * FROM store_image where country='$cntCode'";
 $query = $this->db->query($sql)->result_array();
 $count=0;
 $resultcont=0;
  foreach ($query as $row)
            {
                
            $getimage  = $row['textImage'];
     

            if(!empty($getimage))
            {
             $resultcont = $count + count($getimage);
    
            }
     else{
  
  return $resultcont;
     }
     
               $count++;
     }
     
     if($resultcont==0){
  ?>
  <p>0 stores</p>
  <?php
     }else{
 ?> 
 <p><?php echo $resultcont;?> stores</p>
 
 <?php
     }
     }
    
    function getFancybox()
    {
 $path ='http://localhost/Global_Admin/uploads/';
 
 $fancyCode=$_POST['store'];
 $sql="SELECT * FROM store_image where textImage='$fancyCode'";
 $query = $this->db->query($sql)->result_array();
 echo json_encode($query);
 //print"<pre>";print_r($query);
 //exit;
    }
    
    function getAddress()
    {
	header('Content-Type: application/json');
	$addressID=$_POST['id'];
        $viewresult=$this->SedarModel->ajaxGetAddress($addressID);
	
	echo json_encode($viewresult);

    }
    
    
    
     function footerStore($id)
    {
 
 $sql="SELECT * FROM store_image where country='$id'";
 $data['getfooter'] = $this->db->query($sql)->result_array();
 
 
 $data['country']=$this->SedarModel->getcountry();
 $data['state']=$this->SedarModel->getstate();
 //$data['getStory']=$this->SedarModel->getStores();
 $data['BrandsName']=$this->SedarModel->getBrandsTable();
 $data['TermsName']=$this->SedarModel->getTermsTable();
 //print"<pre>";
 //print_r($data['getfooter']);
 //exit;
 
 $this->load->view('header');
 $this->load->view('UI/Stores',$data);
 
 $this->load->view('footer',$data);
    }
    
    
    
    
    function Stores()
    {
 $data['country']=$this->SedarModel->getcountry();
 $data['state']=$this->SedarModel->getstate();
 $data['getStory']=$this->SedarModel->getStores();
 $data['BrandsName']=$this->SedarModel->getBrandsTable();
 $data['TermsName']=$this->SedarModel->getTermsTable();
 //print"<pre>";
 //print_r($data['country']);
 //exit;
 //
 $this->load->view('header');
 $this->load->view('UI/Stores',$data);
 
 $this->load->view('footer',$data);
    }
    //Hakkim Ctrl end
}