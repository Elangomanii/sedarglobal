<?php
class SedarModel extends CI_Model {

    function __construct()
    {
	parent::__construct();
    }
    
    function getslider()
    {
	if($this->uri->segment(1, 0)=='ar')
        {
	    $select= "SELECT * FROM ar_slider";
	    return $this->db->query($select)->result_array();
	}
	else
	{
	    $select= "SELECT * FROM slider";
	    return $this->db->query($select)->result_array();
	}
    }
    function BringProducts()
    {
	if($this->uri->segment(1, 0)=='ar')
        {
	    $select= "SELECT * FROM ar_products";
	    return $this->db->query($select)->result_array();
	}
	else
	{
	    $select= "SELECT * FROM products";
	    return $this->db->query($select)->result_array();
	}
    }
    
    function tab_brand()
    {
	if($this->uri->segment(1, 0)=='ar')
        {
	    $select= "SELECT * FROM ar_brands";
	    return $this->db->query($select)->result_array();
	}
	else
	{
	     $select= "SELECT * FROM brands";
	    return $this->db->query($select)->result_array();
	}
    }
    
    function tab_products()
    {
	if($this->uri->segment(1, 0)=='ar')
        {
	    $select= "SELECT * FROM ar_productCategory";
	    return $this->db->query($select)->result_array();
	}
	else
	{
	    $select= "SELECT * FROM productCategory";
	    return $this->db->query($select)->result_array();
	}
    }
    
    function getnews()
    {
	if($this->uri->segment(1, 0)=='ar')
        {
	    $select= "SELECT * FROM ar_news";
	    return $this->db->query($select)->result_array();
	}
	else
	{
	    $select= "SELECT * FROM news";
	    return $this->db->query($select)->result_array();
	}
    }    
    
    function getBrands($brand)
    {
	if($this->uri->segment(1, 0)=='ar')
        {
	    $select= "SELECT * FROM ar_brands where id='$brand'";
	    return $this->db->query($select)->result_array();
	}
	else
	{
	    $select= "SELECT * FROM brands where id='$brand'";
	    return $this->db->query($select)->result_array();
	}
    }

    function getBrandsTable()
    {
	if($this->uri->segment(1, 0)=='ar')
        {
	    $select= "SELECT * FROM ar_brands where status='ENABLED' ORDER BY position";
	    return $this->db->query($select)->result_array();
	}
	else
	{
	    $select= "SELECT * FROM brands where status='ENABLED' ORDER BY position";
	    return $this->db->query($select)->result_array();
	}
    }
    
    //pravinkuamr
    function fetchBranName($id)
    {
	if($this->uri->segment(1, 0)=='ar')
        {
	    $select = "SELECT * FROM ar_brands where id='$id'";
	    return $this->db->query($select)->result_array();
	}
	else
	{
	    $select = "SELECT * FROM brands where id='$id'";
	    return $this->db->query($select)->result_array();
	}
    }
    function ajaxProductSearch($brand,$product,$material,$accessories,$motorization,$position,$perPage)
    {
	if($this->uri->segment(1, 0)=='ar')
        {
	    $select = "SELECT * FROM ar_products WHERE";
	}
	else
	{
	    $select = "SELECT * FROM products WHERE";
	}
	$brandCount = count($brand);
	$productCount = count($product);
	$materialCount = count($material);
	$accessoriesCount = count($accessories);
	$loopCheck = 0;
	if($brand){
	    $count = 0;
	    $select = $select.' ( ';
	    foreach($brand as $brandArray)
	    {
		if($count < $brandCount-1){
		$select = $select.' brandId LIKE '.$brandArray.' OR';
	    }else{
		$select = $select.' brandId LIKE '.$brandArray;
	    }
		$count++;
	    }
	    $select = $select.' ) ';
	    $loopCheck++;
	}
	if($product){ 
	    $count = 0;
	    if($loopCheck != 0)
	    {
		$select = $select.' AND';
		$select = $select.' ( ';
	    }else{
		$select = $select.' ( ';
	    }
	    foreach($product as $productArray)
	    {
		if($count < $productCount-1){
		$select = $select.' productCategory LIKE '.$productArray. ' OR';
	    }else{
		$select = $select.' productCategory LIKE '.$productArray;
	    }
		$count++;
	    }
	    $select = $select.' ) ';
	    $loopCheck++;
	}
	if($material){
	    $count = 0;
	    if($loopCheck != 0)
	    {
		$select = $select.' AND';
		$select = $select.' ( ';
	    }else{
		$select = $select.' ( ';
	    }
	    foreach($material as $materialArray)
	    {
		if($count < $materialCount-1){
		$select = $select.' productMaterial LIKE '.$materialArray. ' OR';
	    }else{
		$select = $select.' productMaterial LIKE '.$materialArray;
	    }
		$count++;
	    }
	    $select = $select.' ) ';
	    $loopCheck++;
	}
	if($accessories){ 
	    $count = 0;
	    if($loopCheck != 0)
	    {
		$select = $select.' AND';
		$select = $select.' ( ';
	    }else{
		$select = $select.' ( ';
	    }
	    foreach($accessories as $accessoriesArray)
	    {
		if($count < $accessoriesCount-1){
		$select = $select.' productAccessories LIKE '.$accessoriesArray. ' OR';
	    }else{
		$select = $select.' productAccessories LIKE '.$accessoriesArray;
	    }
		$count++;
	    }
	    $select = $select.' ) ';
	}
	if($motorization){
	    $select = $select.' AND';
	    $select = $select.' ( ';
	    $select = $select.' motor LIKE '.$motorization;
	    $select = $select.' ) ';
	}
	$select = $select. ' LIMIT '.$position.', '.$perPage;
	return $this->db->query($select)->result_array();
    }
    function searchCount($brand,$product,$material,$accessories,$motorization)
    {
	if($this->uri->segment(1, 0)=='ar')
        {
	    $select = "SELECT * FROM ar_products WHERE";
	}
	else
	{
	    $select = "SELECT * FROM products WHERE";
	}
	$brandCount = count($brand);
	$productCount = count($product);
	$materialCount = count($material);
	$accessoriesCount = count($accessories);
	$loopCheck = 0;
	if($brand){
	    $count = 0;
	    $select = $select.' ( ';
	    foreach($brand as $brandArray)
	    {
		if($count < $brandCount-1){
		$select = $select.' brandId LIKE '.$brandArray.' OR';
	    }else{
		$select = $select.' brandId LIKE '.$brandArray;
	    }
		$count++;
	    }
	    $select = $select.' ) ';
	    $loopCheck++;
	}
	if($product){ 
	    $count = 0;
	    if($loopCheck != 0)
	    {
		$select = $select.' AND';
		$select = $select.' ( ';
	    }else{
		$select = $select.' ( ';
	    }
	    foreach($product as $productArray)
	    {
		if($count < $productCount-1){
		$select = $select.' productCategory LIKE '.$productArray. ' OR';
	    }else{
		$select = $select.' productCategory LIKE '.$productArray;
	    }
		$count++;
	    }
	    $select = $select.' ) ';
	    $loopCheck++;
	}
	if($material){
	    $count = 0;
	    if($loopCheck != 0)
	    {
		$select = $select.' AND';
		$select = $select.' ( ';
	    }else{
		$select = $select.' ( ';
	    }
	    foreach($material as $materialArray)
	    {
		if($count < $materialCount-1){
		$select = $select.' productMaterial LIKE '.$materialArray. ' OR';
	    }else{
		$select = $select.' productMaterial LIKE '.$materialArray;
	    }
		$count++;
	    }
	    $select = $select.' ) ';
	    $loopCheck++;
	}
	if($accessories){ 
	    $count = 0;
	    if($loopCheck != 0)
	    {
		$select = $select.' AND';
		$select = $select.' ( ';
	    }else{
		$select = $select.' ( ';
	    }
	    foreach($accessories as $accessoriesArray)
	    {
		if($count < $accessoriesCount-1){
		$select = $select.' productAccessories LIKE '.$accessoriesArray. ' OR';
	    }else{
		$select = $select.' productAccessories LIKE '.$accessoriesArray;
	    }
		$count++;
	    }
	    $select = $select.' ) ';
	}
	if($motorization){
	    $select = $select.' AND';
	    $select = $select.' ( ';
	    $select = $select.' motor LIKE '.$motorization;
	    $select = $select.' ) ';
	}
	return $this->db->query($select)->result_array();
    }
    //pravinkuar end
    
    function getProductsTable()
    {
	if($this->uri->segment(1, 0)=='ar')
        {
	    $select= "SELECT * FROM ar_productcategory ";
	    return $this->db->query($select)->result_array();
	}
	else
	{
	    $select= "SELECT * FROM productcategory ";
	    return $this->db->query($select)->result_array();
	}
    }
    function getProduct($brand)
    {
	if($this->uri->segment(1, 0)=='ar')
        {
	    $select= "SELECT * FROM ar_products where brandId='$brand'";
	    return $this->db->query($select)->result_array();
	}
	else
	{
	    $select= "SELECT * FROM products where brandId='$brand'";
	    return $this->db->query($select)->result_array();
	}
    }
    
    function getProductName($brand,$proName)
    {
	if($this->uri->segment(1, 0)=='ar')
        {
	    $select= "SELECT * FROM ar_products where brandId='$brand' and id='$proName'";
	    return $this->db->query($select)->result_array();
	}
	else
	{
	    $select= "SELECT * FROM products where brandId='$brand' and id='$proName'";
	    return $this->db->query($select)->result_array();
	}
    }
    
    function RecentProductViewList($recent)
    {
	if($this->uri->segment(1, 0)=='ar')
        {
	    $select= "SELECT * FROM ar_products where id='$recent'";
	    return $this->db->query($select)->result_array();
	}
	else
	{
	    $select= "SELECT * FROM products where id='$recent'";
	    return $this->db->query($select)->result_array();
	}
    }
    
    function getTerms($terms)
    {
	if($this->uri->segment(1, 0)=='ar')
        {
	    $select= "SELECT * FROM ar_terms where id='$terms'";
	    return $this->db->query($select)->result_array();
	}
	else
	{
	    $select= "SELECT * FROM terms where id='$terms'";
	    return $this->db->query($select)->result_array();
	}
    }
    
    function getTermsTable()
    {
	if($this->uri->segment(1, 0)=='ar')
        {
	    $select= "SELECT * FROM ar_terms";
	    return $this->db->query($select)->result_array();
	}
	else
	{
	    $select= "SELECT * FROM terms";
	    return $this->db->query($select)->result_array();
	}
    }
    function getContactTable()
    {
	if($this->uri->segment(1, 0)=='ar')
	{
	    $select= "SELECT * FROM ar_contact";
	    return $this->db->query($select)->result_array();
	}
	else
	{
	    $select= "SELECT * FROM contact";
	    return $this->db->query($select)->result_array();
	}
    }
    function getAllProduct()
    {
	if($this->uri->segment(1, 0)=='ar')
        {
	    $select= "SELECT * FROM ar_products";
	    return $this->db->query($select)->result_array();
	}
	else
	{
	    $select= "SELECT * FROM products";
	    return $this->db->query($select)->result_array();
	}
    }
    function projectDetails()
    {
	if($this->uri->segment(1, 0)=='ar')
        {
	    $select= "SELECT * FROM ar_about_us ";
	    return $this->db->query($select)->result_array();
	}
	else
	{
	    $select= "SELECT * FROM about_us ";
	    return $this->db->query($select)->result_array();
	}
    }
     function clientDetails()
    {
	if($this->uri->segment(1, 0)=='ar')
        {
	    $select= "SELECT * FROM ar_clientoverview ";
	    return $this->db->query($select)->result_array();
	}
	else
	{
	    $select= "SELECT * FROM clientoverview ";
	    return $this->db->query($select)->result_array();
	}
    }
    function FetchFranchisingOpportunities()
    {
	if($this->uri->segment(1, 0)=='ar')
        {
	    $select= "SELECT * FROM ar_franchising_opportunities";
	    return $this->db->query($select)->result_array();
	}
	else
	{
	    $select= "SELECT * FROM franchising_opportunities";
	    return $this->db->query($select)->result_array();
	}
    }
    function getNewsData($id)
    {
	if($this->uri->segment(1, 0)=='ar')
        {
	    $select= "SELECT * FROM ar_news where id='$id'";
	    return $this->db->query($select)->result_array();
	}
	else
	{
	    $select= "SELECT * FROM news where id='$id'";
	    return $this->db->query($select)->result_array();
	}
    }
    function FetchFeedbackDescription()
    {
	if($this->uri->segment(1, 0)=='ar')
        {
	    $select= "SELECT * FROM ar_feedback";
	    return $this->db->query($select)->result_array();
	}
	else
	{
	    $select= "SELECT * FROM feedback";
	    return $this->db->query($select)->result_array();
	}
    }
    function FetchProductMaterial()
    {
	if($this->uri->segment(1, 0)=='ar')
        {
	    $select= "SELECT * FROM ar_sedarmaterial";
	    return $this->db->query($select)->result_array();
	}
	else
	{
	    $select= "SELECT * FROM sedarmaterial";
	    return $this->db->query($select)->result_array();
	}
    }
    function FetchProductCategory()
    {
	if($this->uri->segment(1, 0)=='ar')
        {
	    $select= "SELECT * FROM ar_productcategory";
	    return $this->db->query($select)->result_array();
	}
	else
	{
	    $select= "SELECT * FROM productcategory";
	    return $this->db->query($select)->result_array();
	}
    }
    function FetchProductAccessories()
    {
    	if($this->uri->segment(1, 0)=='ar')
        {
	    $select= "SELECT * FROM ar_sedaraccessories";
	    return $this->db->query($select)->result_array();
	}
	else
	{
	    $select= "SELECT * FROM sedaraccessories";
	    return $this->db->query($select)->result_array();
	}
    }
    
    function FetchProjectsImages()
    {
     	if($this->uri->segment(1, 0)=='ar')
        {
	    $select= "SELECT * FROM ar_about_project_img where status='ENABLED' ORDER BY position ";
	    return $this->db->query($select)->result_array();
	}
	else
	{
	    $select= "SELECT * FROM about_project_img where status='ENABLED' ORDER BY position ";
	    return $this->db->query($select)->result_array();
	}
    }
    function FetchClientsImages()
    {
       	if($this->uri->segment(1, 0)=='ar')
        {
	    $select= "SELECT * FROM ar_about_client_img where status='ENABLED' ORDER BY position";
	    return $this->db->query($select)->result_array();
	}
	else
	{
	    $select= "SELECT * FROM about_client_img where status='ENABLED' ORDER BY position";
	    return $this->db->query($select)->result_array();
	}
    }
    function SearchSedarCountryMap()
    {
    	if($this->uri->segment(1, 0)=='ar')
        {
	    $select= "SELECT * FROM ar_Country where latitude='' and longitude=''";
	    return $this->db->query($select)->result_array();
	}
	else
	{
	    $select= "SELECT * FROM Country where latitude='' and longitude=''";
	    return $this->db->query($select)->result_array();
	}
    }
    function SedarStorList()
    {
	if($this->uri->segment(1, 0)=='ar')
        {
	    $select= "SELECT * FROM ar_sedarstorecompany";
	    return $this->db->query($select)->result_array();
	}
	else
	{
	    $select= "SELECT * FROM sedarstorecompany";
	    return $this->db->query($select)->result_array();
	}
    }
    //hakkim mod st
    function getcountry()
    {
	if($this->uri->segment(1, 0)=='ar')
        {
	    $sql="SELECT * FROM ar_ourcountry";
	    return $query = $this->db->query($sql)->result_array();
	}
	else
	{
	    $sql="SELECT * FROM ourcountry";
	    return $query = $this->db->query($sql)->result_array();
	}
    }
    function getstate()
    {
       if($this->uri->segment(1, 0)=='ar')
       {
	    $sql="SELECT * FROM ar_ourstate";
	    return $query = $this->db->query($sql)->result_array();
	}
	else
	{
	    $sql="SELECT * FROM ourstate";
	    return $query = $this->db->query($sql)->result_array();
	}
    }
    function getcity()
    {	
       if($this->uri->segment(1, 0)=='ar')
       { 
	    $sql="SELECT * FROM ar_ourcity";
	    return $query = $this->db->query($sql)->result_array();
	}
	else
	{
	    $sql="SELECT * FROM ourcity";
	    return $query = $this->db->query($sql)->result_array();
	}
    }
    function getStores()
    {
       if($this->uri->segment(1, 0)=='ar')
       { 
	    $sql="select * from ar_store_image" ;
	    return $result=$this->db->query($sql)->result_array();
	}
	else
	{
	    $sql="select * from store_image" ;
	    return $result=$this->db->query($sql)->result_array();
	}
    }
    //hakkim mod end
     function ajaxGetAddress($addressID)
        {
            $sql="SELECT * FROM store_image where id='$addressID'";
            return $this->db->query($sql)->result_array();
            
        }
    
}