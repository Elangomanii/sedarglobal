<?php
class SedarModel extends CI_Model {

    function __construct()
    {
	parent::__construct();
    }
    
    function getslider()
    {
	$select= "SELECT * FROM slider";
	return $this->db->query($select)->result_array(); 
    }
    function BringProducts()
    {
	$select= "SELECT * FROM products";
	return $this->db->query($select)->result_array();        
    }
    
    function tab_brand()
    {
	$select= "SELECT * FROM brands";
	return $this->db->query($select)->result_array();        
    }
    
    function tab_products()
    {
	$select= "SELECT * FROM productCategory";
	return $this->db->query($select)->result_array();        
    }
    
    function getnews()
    {
	$select= "SELECT * FROM news";
	return $this->db->query($select)->result_array();        
    }    
    
    function getBrands($brand)
    {
	$select= "SELECT * FROM brands where id='$brand'";
	return $this->db->query($select)->result_array();
    }

    function getBrandsTable()
    {
	$select= "SELECT * FROM brands";
	return $this->db->query($select)->result_array();
    }
    
    function getProduct($brand)
    {
	$select= "SELECT * FROM products where brandId='$brand'";
	return $this->db->query($select)->result_array();
    }
    
    function getProductName($brand,$proName)
    {
	$select= "SELECT * FROM products where brandId='$brand' and id='$proName'";
	return $this->db->query($select)->result_array();
    }
    
    function RecentProductViewList($recent)
    {
	$select= "SELECT * FROM products where id='$recent'";
	return $this->db->query($select)->result_array();
    }
    
    function getTerms($terms)
    {
	$select= "SELECT * FROM terms where id='$terms'";
	return $this->db->query($select)->result_array();
    }
    
    function getTermsTable()
    {
	$select= "SELECT * FROM terms ";
	return $this->db->query($select)->result_array();
    }
    function projectDetails()
    {
	$select= "SELECT * FROM about_us ";
	return $this->db->query($select)->result_array();
    }
     function clientDetails()
    {
	$select= "SELECT * FROM clientoverview ";
        return $this->db->query($select)->result_array();
    }
    function FetchFranchisingOpportunities()
    {
	$select= "SELECT * FROM franchising_opportunities";
	return $this->db->query($select)->result_array();	
    }
    function getNewsData($id)
    {
	$select= "SELECT * FROM news where id='$id'";
	return $this->db->query($select)->result_array();        
    }
    function FetchFeedbackDescription()
    {
	$select= "SELECT * FROM feedback";
	return $this->db->query($select)->result_array();     
    }
    
    function FetchProductMaterial()
    {
	$select= "SELECT * FROM sedarmaterial";
	return $this->db->query($select)->result_array();        
    }
    
    function FetchProductAccessories()
    {
	$select= "SELECT * FROM sedaraccessories";
	return $this->db->query($select)->result_array();        
    }
    
    function FetchProjectsImages()
    {
	$select= "SELECT * FROM about_project_img";
	return $this->db->query($select)->result_array();        
    }
    
    function FetchClientsImages()
    {
	$select= "SELECT * FROM about_client_img";
	return $this->db->query($select)->result_array();        
    }
    function SearchSedarCountryMap()
    {
	$select= "SELECT * FROM Country where latitude='' and longitude=''";
	return $this->db->query($select)->result_array();	
    }
    function SedarStorList()
    {
	$select= "SELECT * FROM sedarstorecompany";
	return $this->db->query($select)->result_array();
    }
    
}